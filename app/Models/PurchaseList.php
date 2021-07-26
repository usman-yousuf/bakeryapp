<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class purchaseList extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'purchase_lists';

    public $timestamps = true;



    protected $fillables = [
        'product_name',
        'store_name',
        'brand_name',
        'quantity',
        'price'
    ];


}
