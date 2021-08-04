<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    public $timestamps = true;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bussiness_name',
        'email',
        'password',
        'phone_code',
        'phone_number',
        'is_social',
        'social_type',
        'social_id',
        'social_email',
        'is_social_password_updated',
        'is_online'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $appends = ['plan_type','active_subscription_date','is_trail_ends'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    protected $with =[
        'address'
    ];

    // relation with address

    function address(){
        return $this->hasOne(Address::class, 'user_id', 'id');
    }

    // relation with subscription

    function subscription(){
        return $this->hasOne(Subscription::class, 'user_id', 'id');
    }

    // relation with product

    function product(){
        return $this->hasMany(product::class, 'user_id', 'id');
    }


    public function getActiveSubscriptionDateAttribute(){
        $active = Subscription::where('user_id', $this->id)
                            ->where('status', 'active')
                            ->latest()->first();

        if($active != null)
            return $active->created_at;
    }

    public function getPlanTypeAttribute (){
        $subscription = Subscription::where('user_id', $this->id)
                            ->where('status', 'active')->latest()->first();

        if($subscription != null){
            return $subscription->plan->name;
        }

     }

    public function getIsTrailEndsAttribute (){
        return Subscription::where('user_id', $this->id)
                        ->where('plan_id', 1)
                        ->where('ends_at','<=',Carbon::now())
                        ->latest()->first()?1:0;

    }

}
