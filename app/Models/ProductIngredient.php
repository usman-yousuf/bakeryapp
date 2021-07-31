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
        'admin_ingredient_id',
        'admin_ingredient_type_id',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $with = [
        'adminIngredient',
        'adminIngredientType'
    ];


    function adminIngredient(){
        return $this->belongsTo(AdminIngredient::class, 'admin_ingredient_id', 'id');
    }

    function adminIngredientType(){
        return $this->belongsTo(AdminIngredientType::class, 'admin_ingredient_type_id', 'id');
    }


    function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    function purchaseList(){
        return $this->belongsTo(PurchaseList::class, 'id', 'purchase_list_id');
    }
}
