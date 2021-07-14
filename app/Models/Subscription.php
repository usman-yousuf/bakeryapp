<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'subscriptions';

    protected $appends = ['plan_type',];


    public $timestamps = true;


    function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function plan(){
        return $this->belongsTo(SubscriptionPlan::class, 'plan_id', 'id');
    }

    function getPlanTypeAttribute(){

        // $subscription = Subscription::where('user_id', $this->id)
        //                     ->where('status', 'active')->latest()->first();

        // if($subscription != null){
        //     return $subscription->plan->name;
        // }
    }
}
