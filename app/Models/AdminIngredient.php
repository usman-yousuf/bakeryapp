<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminIngredient extends Model
{
    use HasFactory;

    protected $with = [
        'adminIngredientTypes',
    ];

     function adminIngredientTypes(){
        return $this->hasMany(AdminIngredientType::class, 'admin_ingredient_id','id');
    }

    function purchaseList(){
        return $this->hasMany(PurchaseList::class, 'admin_ingredient_id','id');
    }



}
