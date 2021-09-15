<?php

namespace App\Http\Controllers;

use App\Models\AdminIngredient;
use App\Models\AdminIngredientType;
use App\Models\AdminProduct;
use App\Models\AdminProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function getIngredientProducts(Request $request){

        $validator = Validator::make($request->all(), [
            'products' => 'in:1|numeric',
            'ingredients' => 'In:1|numeric',
            'product_id' => 'exists:admin_products,id|numeric',
            'ingredient_id' => 'exists:admin_ingredients,id|numeric',
            'product_type_id' => 'exists:admin_ingredient_types,id|numeric',
            'ingredient_type_id' => 'exists:admin_product_types,id|numeric',
            'country' => 'string',
        ]);
        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }
        $data = [];


        if(isset($request->products) || (isset($request->should_get_admin_products) && ($request->should_get_admin_products))){
            $products = AdminProduct::orderBy('created_at', 'DESC');

            if(isset($request->user()->address->country))
                $products->where('country', $request->user()->address->country);

            if(isset($request->country)){
                $products->where('country', $request->country);
            }
            $data['products'] = $products->get();
        }
        if(isset($request->ingredients)){
            $ingredients = AdminIngredient::orderBy('created_at', 'DESC');

            if(isset($request->user()->address->country))
                $ingredients->where('country', $request->user()->address->country);

            if(isset($request->country)){
                $ingredients->where('country', $request->country);
            }
            $ingredients = $ingredients->get();;
            $data['ingredients'] = $ingredients;
        }
        if(isset($request->mostPurchasedItems)){
            $most_purchased = PurchaseList::select('admin_ingredient_type_id')->groupBy('admin_ingredient_type_id')->orderByRaw('COUNT(*) DESC')->get();
            $data['most_purchased'] = $most_purchased;
        }
        if(isset($request->product_id)){
            $product_type = AdminProductType::where('admin_product_id', $request->product_id)->get();
            $data['product_type'] = $product_type;
        }

        if(isset($request->ingredient_id)){
            $ingredient_type = AdminIngredientType::where('admin_ingredient_id', $request->ingredient_id)->get();
            $data['ingredient_type'] = $ingredient_type;
        }
        if(isset($request->product_type_id)){
            $product_type_size = AdminProductType::where('id', $request->product_type_id)->pluck('size');
            $data['product_type_size'] = $product_type_size;
        }
        if(isset($request->ingredient_type_id)){
            $ingredient_type_size = AdminIngredientType::where('id', $request->ingredient_type_id)->pluck('size');
            $data['ingredient_type_size'] = $ingredient_type_size;
        }
        if(NULL == $data)
            return sendError('No Data Found',[]);

        return sendSuccess('Data',$data);
    }


    public function deleteIngredientProduct(Request $request){

        $product = AdminProduct::where('id', $request->product_id)->first();
            $product->delete();
            if($product->delete())
                return sendSuccess('Product deleted successfully',[]);
    }
}
