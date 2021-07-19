<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ingrediants;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function addUpdateProduct(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
            'user_id' => 'exists:users,id',
            'product_id' => 'exists:products,id',
            'price' => 'required_without:product_id|numeric',
            'name' => 'required_without:product_id|regex:/^[\pL\s\-]+$/u',
            ]);

        if($validator->fails()){
                $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
            }

        $product = Product::where('id', $request->product_id)->first();
        if($product == null)
            $product = new Product;

        $product->name = $request->name??$product->name;
        $product->user_id = $request->user_id??$product->user_id??$request->user()->id;
        $product->description = $request->description??$product->description;
        $product->price = $request->price??$product->price;
        $product->save();

        if($product->save()){
            $data['product'] = $product;
            return sendSuccess('Product Saved', $data);
        }
        return sendError('There is some thing wrong, Please try again', null);   

    }              
}