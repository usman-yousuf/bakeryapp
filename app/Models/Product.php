<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'products';

    public $timestamps = true;

    use SoftDeletes;

    /**
     *
     * the attributes mass asignable
     *
     * @var array
     *
     */

    //  protected $fillables = [
    //     'user_id',
    //     'name',
    //     'description',
    //     'price'
    //  ];
        protected $guarded = [];

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


    // relation with user

    function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // relation with ingredients

    function productIngrediant(){
        return $this->hasMany(ProductIngrediant::class, 'product_id', 'id');
    }

}
