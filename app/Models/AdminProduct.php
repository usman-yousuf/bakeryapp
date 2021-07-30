<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    use HasFactory;


    protected $with = [
        'adminProductTypes',
    ];

    function adminProductTypes(){
        return $this->hasMany(AdminProductType::class, 'admin_product_id', 'id');
    }

    function product(){
        return $this->hasMany(Product::class, 'admin_product_id', 'id');
    }

}
