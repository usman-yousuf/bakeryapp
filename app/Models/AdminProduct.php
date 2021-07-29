<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    use HasFactory;

    function adminProductTypes(){
        return $this->hasMany(AdminProductType::class);
    }

    function product(){
        return $this->hasMany(Product::class, 'id', 'Admin_product_id');
    }

}
