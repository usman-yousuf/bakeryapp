<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    //
    /**
     * subscription validation
     *
     * @param Request $request
     * @return void
     */
    public function updateSubscription(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'user_id' => 'exists:users,id',
            'plan_id' => 'required|exists:subscription_plans,id'
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        // subscription update

        $old_subscription = Subscription::where('user_id', $request->user_id ?? $request->user()->id)->latest()->first();
        if($old_subscription != null){
            $old_subscription->status = 'inactive';
            if($old_subscription->save()){
                $old_subscription->delete();
            }
        }

        $new_subscription =  new Subscription;
        $new_subscription->user_id = $request->user_id ?? $request->user()->id;
        $new_subscription->plan_id = $request->plan_id;
        $new_subscription->ends_at = $request->plan_id == 1?Carbon::now()->addWeeks(2):$request->ends_at;
        $new_subscription->status = 'active';
        if($new_subscription->save()){
            $data['subscription'] = $new_subscription;
            return sendSuccess("You have Subscribed Successfully.",$data);
        }
        return sendError("There is some problem, Please try again.",$data);
    }



    // getting user subscriptions
    public function getSubscription(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'exists:users,id',
            'plan_id' => 'exists:subscription_plans,id',
            'subscription_id' => 'exists:subscriptions,id',
            'status' => 'in:active,inactive',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }
        $models = Subscription::orderBy('created_at', 'DESC');

        if(isset($request->subscription_id) && ('' != $request->subscription_id)){
            $models->where('id', $request->subscription_id);
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

        $models = $models->with(['plan','user'])->get();

        if(isset($request->offset) && isset($request->limit) ){
           $models->offset($request->offset)->limit($request->limit);
        }

        if($models){
            $data['subscription'] = $models;
            return sendSuccess('Subscriptions Found.', $data);
        }
        return sendSuccess('No Subscriptions Found.', null);


    }

    // get subscription plans
    public function getSubscriptionPlans(Request $request){

        $models = SubscriptionPlan::all();
        if(count($models)){
            $data['subscription_plans'] = $models;
            return sendSuccess('Subscription Plans Found.', $data);
        }
        return sendSuccess('No Data Found.', null);
    }
}

