<?php

namespace App\Http\Controllers;

use App\Models\AdminIngredient;
use App\Models\AdminProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function getIngredientProducts(Request $request){

        $validator = Validator::make($request->all(), [
            'products' => 'required_without:ingredients|in:1,0|numeric',
            'ingredients' => 'required_without:products|In:1,0|numeric',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        if(isset($request->products)){
            $products = AdminProduct::all();
            $data['products'] = $products;
        }
        if(isset($request->ingredients)){
            $ingredients = AdminIngredient::all();
            $data['ingredients'] = $ingredients;
        }

        return sendSuccess('Data',$data);


    }
}
