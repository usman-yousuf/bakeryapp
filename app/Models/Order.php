<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = [
    	'product',
    	'adminProductType',
    ];

    function adminProductType(){
        return $this->belongsTo(AdminProductType::class, 'admin_product_type_id', 'id');
    }

    function product(){
        return $this->belongsTo(Product::class,  'product_id', 'id');
    }
}
