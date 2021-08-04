<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminProduct;
use App\Models\AdminProductType;
use App\Models\AdminIngredient;
use App\Models\AdminIngredientType;
use App\Models\Ingrediant;
use App\Models\ProductIngredient;
use App\Models\Product;
use App\Models\ProductIngrediant;
use App\Models\PurchaseList;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ProductController;

class WebController extends Controller
{

    public function __construct(ProductController $ProductController)
    {
        $this->ProductController = $ProductController;
    }



    public function webGetProducts(Request $request){

        $request->user_id = $request->user_id ?? 6;

        $get_product = $this->ProductController->getProducts($request)->getdata();

        return view('pages.products', [ 'get_product' => $get_product ]);
    }


}
