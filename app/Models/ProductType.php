<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'product_type';

    public $timestamps = true;

    use SoftDeletes;

    /**
     *
     * the attributes mass asignable
     *
     * @var array
     *
     */

     protected $fillables = [
         'type_name',
         'type_size'
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

}
