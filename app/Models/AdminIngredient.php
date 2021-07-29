<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminIngredient extends Model
{
    use HasFactory;

     function adminIngredientTypes(){
        return $this->hasMany(AdminIngredientType::class);
    }

    function purchaseList(){
        return $this->hasMany(PurchaseList::class, 'Admin_ingredient_id','id');
    }



}
