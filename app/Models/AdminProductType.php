<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductType extends Model
{
    use HasFactory;


    function adminProduct(){
            return $this->belongsTo(AdminProduct::class , 'admin_product_id' , 'id');
        }

    function product(){
        return $this->hasMany(Product::class, 'id', 'Admin_product_type_id');
    }
}
