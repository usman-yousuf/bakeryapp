<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function updateSubscriptionplan(Request $request)
    {

        // subscription validation

    	$validator = Validator::make($request->all(), [
    		'user_id' => 'required|exists:users,id',
            'plan_id' => 'required|exists:subscription_plans,id',
    		'status' => 'required|in:active,inactive',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        // subscription update

        $subscription = Subscription::where('user_id', $request->user_id??$request->user()->id)->latest()->first();
        if(null != $subscription){
            $subscription->status = 'inactive';
            $subscription->save();
            $subscription->delete();
        }
        $subscription =  new Subscription;
        $subscription->user_id = $request->user_id??$request->user()->id;
        $subscription->plan_id = $request->plan_id ?? 1;
        $subscription->status = $request->status;
        $subscription->save();
        return sendSuccess("You have Saved Subscription",$subscription);
    }



    public function getSubscriptionDataList(Request $request){

        $validator = Validator::make($request->all(), [
    		'subscription_id' => 'exists:subscriptions,id',
    		'user_id' => 'exists:users,id',
            'plan_id' => 'exists:subscription_plans,id',
    		'status' => 'in:active,inactive',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        // getting subscription data

        $models = Subscription::orderBy('created_at', 'DESC');

        if(isset($request->subscription_id) && ('' != $request->subscription_id)){
            $models->where('subscription_id', $request->subscription_id);
        }

        if(isset($request->user_id) && ('' != $request->user_id)){
            $models->where('user_id', $request->user_id);
        }

        if(isset($request->plan_id) && ('' != $request->plan_id)){
            $models->where('plan_id', $request->plan_id);
        }

        if(isset($request->status) && ('' != $request->status)){
            $models->where('status', $request->status);
        }

        if(isset($request->ends_at) && ('' != $request->ends_at)){
            $models->where('ends_at', '>', $request->ends_at);
        }

        $models = $models
            ->with(['user', 'plan'])
        ->get();

        return sendSuccess('models fetched successfully', $models);

    }

    // get subscription plans

    public function getSubscriptionPlans(Request $request){

        $modals = SubscriptionPlan::all();

        return sendSuccess('Subscription Plans', $modals);
    }
}

