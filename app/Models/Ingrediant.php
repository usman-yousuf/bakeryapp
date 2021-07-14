<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Ingrediant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ingrediants';

    public $timestamps = true;


    /**
     *
     * the attributes mass asignable
     *
     * @var array
     *
     */
    protected $fillable = [
        'item_name',
        'item_type',
        'item_brand',
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
