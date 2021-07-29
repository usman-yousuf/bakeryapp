<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductIngredient extends Model
{
    use HasFactory;

    protected $table = 'product_ingredients';

    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'purchase_list_id',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    function product(){
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    function purchaseList(){
        return $this->belongsTo(PurchaseList::class, 'id', 'purchase_list_id');
    }
}
