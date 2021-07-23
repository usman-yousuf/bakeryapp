<?php

namespace App\Http\Controllers;

use App\Models\AdminProduct;
use App\Models\AdminProductType;
use App\Models\Ingrediants;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function addUpdateProduct(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'user_id' => 'exists:users,id',
            'product_id' => 'exists:products,id',
            'price' => 'required_without:product_id|numeric',
            'name' => 'required_without:product_id|regex:/^[\pL\s\-]+$/u',
            'auction_product_id' => 'required_without:product_id|exists:admin_products,id',
            'auction_product_type_id' => 'required_with:auction_product_id|exists:admin_product_types,id',
            'auction_product_type_size' => 'required_with:auction_product_id|in:S,M,l',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        $product = Product::where('id', $request->product_id)->first();
        if($product == null)
            $product = new Product;

        $admin_product = AdminProduct::where('id',$request->auction_product_id)->first();
        $admin_product_type = AdminProductType::where('id',$request->auction_product_type_id)->first();

        $product->name = $admin_product->name??$product->name;
        $product->user_id = $request->user_id??$product->user_id??$request->user()->id;
        $product->description = $request->description??$product->description;
        $product->price = $request->price??$product->price;
        $product->save();
        if($product->save()){

            $product_type = new ProductType;
            $product_type->product_id = $product->id;
            $product_type->type_name = $admin_product_type->type_name;
            $product_type->type_size = $request->auction_product_type_size;
            $product_type->save();
        }

        if($product->save() && $product_type->save()){
            $data['product'] = $product;
            $data['product']['product_type'] = $product_type;
            return sendSuccess('Product Saved', $data);
        }
        return sendError('There is some thing wrong, Please try again', null);   
    } 

    public function getProducts(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'product_id' => 'exists:products,id',
            'user_id' => 'exists:users,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        $products = Product::orderBy('created_at','DESC');

        if(isset($request->product_id))
            $products->('id',$request->product_id);
        if(isset($request->user_id))
            $products->('user_id',$request->user_id);

        $clone_products = $products;

        if(isset($request->offset) && isset($request->limit)){
            $products->offset($request->offset)->limit($request->limit);
        }

    }             
}