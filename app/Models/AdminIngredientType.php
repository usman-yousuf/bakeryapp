<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminIngredientType extends Model
{
    use HasFactory;

    function adminIgredient(){
    	return $this->belongsTo(AdminIngredient::class , 'admin_ingredient_id' , 'id');
    }

    function purchaseList(){
        return $this->hasMany(PurchaseList::class, 'admin_ingredient_type_id', 'id');
    }
}
