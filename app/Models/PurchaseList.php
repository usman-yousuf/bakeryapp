<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseList extends Model
{
    use HasFactory;

    protected $table = 'purchase_lists';

    use SoftDeletes;

    public $timestamps = true;

     protected $fillable =[
        'admin_ingredient_id',
        'admin_ingredient_type_id',
        'store_name',
        'qunatity',
        'price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $with = [
        'adminIngredient',
        'adminIngredientType',
        'productIngredient',
    ];


    public function adminIngredient()
    {
        return $this->belongsTo(AdminIngredient::class, 'admin_ingredient_id', 'id');
    }

    function adminIngredientType()
    {
        return $this->belongsTo(AdminIngredientType::class, 'admin_ingredient_type_id', 'id');
    }

    function productIngredient(){
        return $this->hasMany(ProductIngredient::class, 'purchase_list_id', 'id');
    }
}
