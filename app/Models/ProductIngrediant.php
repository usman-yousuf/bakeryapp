<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductIngrediant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_ingrediants';

    public $timestamps = true;



    protected $fillables = [
        'quantity'
    ];

    function product(){
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }


    function ingrediant(){
        return $this->belongsTo(Ingrediant::class, 'id', 'ingrediant_id');
    }
}
