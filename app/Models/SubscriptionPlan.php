<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class SubscriptionPlan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'subscription_plans';

    public $timestamps = true;

    use SoftDeletes;

    /**
     * The attributes that are mass asignable
     *
     * @var array
     *
     */

     protected $fillable = [
         'name',
         'slug',
         'price',
         'is_purchased_enabled',
         'is_product_enabled',
         'is_sales_enabled',
         'is_accounts_enabled',
         'status'
     ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     protected $hidden = [
         'created_at',
         'updated_at',
         'deleted_at'
     ];

    function subscriptions(){
        return $this->hasMany(Subscription::class ,'plan_id', 'id');
    }

}
