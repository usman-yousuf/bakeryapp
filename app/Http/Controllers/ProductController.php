<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // add update products

    public function addUpdateProduct(Request $request){
        $validator = Validator::make($request->all(),[

        'user_id' => 'required|exists:users,id',
        'product_id' => 'exists:products,id',
        'price' => 'required|numeric',
        'admin_product_id' => 'required|exists:admin_products,id',
        'description' => 'required|string',
        'admin_product_type_id' => 'required|exists:admin_product_types,id',
        'size' => 'required',
        'admin_ingredient_id' => 'required|exists:admin_ingredients,id|array',
        'admin_ingredient_type_id' => 'required|exists:admin_ingredient_types,id|array',
        'quantity' => 'required|array',
        'purchase_list_id' => 'exists:purchase_lists,id|array'
        // 'name' => 'required_without:product_id|regex:/^[\pL\s\-]+$/u',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
        }


        if(
            count($request->admin_ingredient_id) != count($request->admin_ingredient_type_id) ||
            count($request->quantity) != count($request->admin_ingredient_id) ||
            count($request->quantity) != count($request->admin_ingredient_type_id)
            )
            return sendError('Unequal amount of data provided',[]);

        $product = Product::where('id', $request->product_id)->first();

        if($product == null)
            $product = new Product;

            $admin_product = AdminProduct::where('id',$request->admin_product_id)->first();
            $admin_product_type = AdminProductType::where('id',$request->admin_product_type_id)->get();

            //Product_list
            $product->user_id = $request->user_id??$product->user_id??$request->user()->id;
            $product->admin_product_id = $request->admin_product_id??$product->admin_product_id;
            $product->admin_product_type_id = $request->admin_product_type_id??$product->admin_product_type_id;
            $product->size = $request->size;
            $product->description = $request->description??$product->description;
            $product->price = $request->price??$product->price;
            $product->save();
            if(!$product->save())
                return sendError('There is some thing wrong, Please try again', null);


            foreach($request->admin_ingredient_id as $key => $ingredient){

                $admin_ingredient = AdminIngredient::where('id',$ingredient)->first();
                if(NULL == $admin_ingredient)
                    return sendError('Admin Ingredient does not exist',[]);

                $admin_ingredient_type = AdminIngredientType::where('id',$request->admin_ingredient_type_id[$key])->where('admin_ingredient_id',$admin_ingredient->id)->first();
                if(NULL == $admin_ingredient_type)
                    return sendError('Admin Ingredient type does not exist or dont belongs to the same Admin Ingredient',[]);

                $purchase_list = Purchaselist::where('id', $request->purchase_list_id[$key] ?? NULL)->first();
                $product_ingredient = new ProductIngredient;
                $product_ingredient->product_id = $product->id;
                $product_ingredient->purchase_list_id = $purchase_list->id ?? NULL;
                $product_ingredient->admin_ingredient_id = $purchase_list->admin_ingredient_id ?? $admin_ingredient->id;
                $product_ingredient->admin_ingredient_type_id = $purchase_list->admin_ingredient_type_id ?? $admin_ingredient_type->id;
                $product_ingredient->quantity = $request->quantity[$key];
                $product_ingredient->save();
                if(!$product_ingredient->save())
                    return sendError('ingredients not save',[]);

            }
                $data['product'] = Product::where('id',$product->id)->first();
                return sendSuccess('Product Saved', $data);
    }

    // Purchase List add and update ingredients

    public function addUpdatePurchaseList(Request $request){

        $validator = Validator::make($request->all(),[

            'purchase_list_id' => 'exists:purchase_lists,id',
            'admin_ingredient_id' => 'required|exists:admin_ingredients,id',
            'admin_ingredient_type_id' => 'required|exists:admin_ingredient_types,id',
            'admin_ingredient_type_id' => 'required|exists:admin_ingredient_types,id',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'store_name' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }


        $ingredient = PurchaseList::where('id', $request->purchase_list_id)->first();
        if($ingredient == null)
            $ingredient = new PurchaseList;

            $ingredient->user_id = $request->user_id;
            $ingredient->admin_ingredient_id = $request->admin_ingredient_id;
            $ingredient->admin_ingredient_type_id = $request->admin_ingredient_type_id;
            $ingredient->store_name = $request->store_name;
            $ingredient->quantity = $request->quantity;
            $ingredient->price = $request->price;
            $ingredient->unit_price = $request->price/$request->quantity;
            $ingredient->save();

        if(!$ingredient->save())
            return sendError('There is some thing wrong, Please try again',[]);

        $data['ingredient'] = PurchaseList::where('id',$ingredient->id)->first();
        return sendSuccess('Ingredient Saved', $data);

    }

    // search Purchase List

    public function searchPurchaseList(Request $request){


         $validator = Validator::make($request->all(),[

            'purchase_list_id' => 'exists:purchase_lists,id',
            'user_id' => 'required|exists:users,id',
            'store_name' => 'string',
            'brand_name' => 'string',
            'price' => 'integer',
            'date'=> 'date',
            'is_inventory' => 'in:1',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }


        $purchase_list = PurchaseList::where('user_id', $request->user_id);
        if(isset($request->is_inventory))
            $purchase_list = $purchase_list->where('quantity','<>',0);

            if(isset($request->product_name)){
                $product_name = $request->product_name;
                $purchase_list = $purchase_list->whereHas( 'adminIngredient' , function($q) use ($product_name) {
                    $q->where('name','like',"%{$product_name}%");
                });
            }

            if(isset($request->brand_name)){
                $brand_name = $request->brand_name;
                // return gettype($brand_name);
                $purchase_list = $purchase_list->whereHas('adminIngredientType' , function($q) use($brand_name) {
                    $q->where('brand_name','like',"%{$brand_name}%");
                });
            }

            // search by store name
            if(isset($request->store_name)){
                $purchase_list = $purchase_list->where('store_name','like',"%{$request->store_name}%");
            }

            // search by price
            if(isset($request->price)){
                $purchase_list = $purchase_list->where('price','>=',$request->price);
            }

            // search by date
            if(isset($request->date)){
                $purchase_list = $purchase_list->where('created_at','like',"%{$request->date}%");
            }

            $data['purchase_list'] = $purchase_list->get();

            return sendSuccess("purchase_list",$data);


}

    // get products

    public function getProducts(Request $request){

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
            $products->where('id',$request->product_id);
        if(isset($request->user_id))
            $products->where('user_id',$request->user_id);

        $clone_products = $products;
        if(isset($request->offset) && isset($request->limit)){
            $products->offset($request->offset)->limit($request->limit);
        }

        $data['products'] = $products->get();
        $data['Total_products'] = $clone_products->count();

        return sendSuccess("Product",$data);
    }

    // product ingredients

    public function productIngredient(Request $request){

        $validator = Validator::make($request->all(),[

            'product_ingredient_id' => 'exists:product_ingredients, id',
            'purchase_list_id' => 'required|exists:purchase_lists,id',
            'product_id' => 'required|exists:products,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        $pro_ingredient = ProductIngredient::where('id', $request->product_ingredient_id)->first();

        if($pro_ingredient == null)
            $pro_ingredient = new ProductIngredient;

            $pro_ingredient->id = $request->product_ingredient_id;
            $pro_ingredient->purchase_list_id = $request->purchase_list_id;
            $pro_ingredient->product_id = $request->product_id;
            $pro_ingredient->quantity = $request->quantity;
            $pro_ingredient->save();

        }


    }
        /**
         *  Extra
         */

         // product ingredient
                // foreach($request->purchase_list_id as $purchase_list){
                //     $product_ingredient = PurchaseList::where('product_id', $purchase_list);
                //     if($product_ingredient == null)
                //         $product_ingredient = new PurchaseList;
                // }

                // foreach($request->purchase_list_id as $ingredient_id){

                //     $pro_ingredient = new ProductIngredient;
                //     $pro_ingredient->purchase_list_id = $ingredient_id;
                //     $pro_ingredient->product_id = $product->id;
                //     $pro_ingredient->quantity = $request->quantity;
                //     $pro_ingredient->save();
                //     if(!$pro_ingredient->save())
                //         return sendError('ingredients not save',[]);

                // }


                // $clone_admin_product_type = $clone_admin_product_type->pluck('size')->toArray();

                //     $dbSizes = explode(',', $clone_admin_product_type[0]);
                //     $compared_size = in_array($request->size, $dbSizes);

                // if($compared_size == 0)
                //     return sendError("Wrong size ",[]);

