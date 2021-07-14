<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ingrediants;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function addUpdateProduct(Request $request){

    // validation for product

    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id',
        'product_id' => 'exists:products,id',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }
        if(isset($request->product_id)){
            $old_product = Product::where('id', $request->product_id)->first();

            if($old_product != null){
                $old_product->name = $request->name;
                $old_product->user_id = $request->user_id;
                $old_product->description = $request->description;
                $old_product->price = $request->price;
                $old_product->save();

                if($old_product->save()){
                    $data['product'] = $old_product;
                    return sendSuccess('You have updated successfuly', $data);
                }
                return sendError('There is some thing wrong, Please try again', null);

            }
        }

        $new_product = new Product;

        $new_product->name = $request->name;
        $new_product->user_id = $request->user_id;
        $new_product->description = $request->description;
        $new_product->price = $request->price;

        if($new_product->save()){
            $data['product'] = $new_product;
            return sendSuccess('You have saved product successfuly', $data);
        }
        return sendError('There is something wrong , Please try again', null);

    }

}

