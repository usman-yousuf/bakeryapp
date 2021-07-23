<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductType extends Model
{
    use HasFactory;

    function adminproduct(){
    	return $this->belongsTo(AdminProduct::class , 'admin_product_id' , 'id');
    }
}
