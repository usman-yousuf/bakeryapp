<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'admin_product_id',
        'admin_product_type_id',
        'size',
        'description',
        'price'
    ];

    protected $hidden = [
        'created_at',
         'updated_at',
         'deleted_at'
    ];

    protected $with = [
        'adminProduct',
        'adminProductType',
        'productIngredient',
    ];


    function adminProduct(){
        return $this->belongsTo(AdminProduct::class, 'admin_product_id', 'id');
    }

    function adminProductType(){
        return $this->belongsTo(AdminProductType::class, 'admin_product_type_id', 'id');
    }

    function productIngredient(){
        return $this->hasMany(ProductIngredient::class, 'product_id', 'id');
    }


}
