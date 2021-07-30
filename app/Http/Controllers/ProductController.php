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
use App\Models\ProductType;
use App\Models\PurchaseList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // add update products

    public function addUpdateProduct(Request $request)
    {
        $validator = Validator::make($request->all(),[

        'user_id' => 'exists:users,id',
        'product_id' => 'exists:products,id',
        'price' => 'required_without:product_id|numeric',
        'admin_product_id' => 'required_without:product_id|exists:admin_products,id',
        'admin_product_type_id' => 'required_with:admin_product_id|exists:admin_product_types,id',
        'size' => 'required_with:admin_product_id|in:S,M,L',
        'purchase_list_id*' => 'required_with:admin_product_id|exists:purchase_lists,id'
        // 'name' => 'required_without:product_id|regex:/^[\pL\s\-]+$/u',
    ]);

    if($validator->fails()){
        $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
    }

    $product = Product::where('id', $request->product_id)->first();

    if($product == null)
        $product = new Product;

        $admin_product = AdminProduct::where('id',$request->admin_product_id)->first();
        $admin_product_type = AdminProductType::where('id',$request->admin_product_type_id);

        $clone_admin_product_type = $admin_product_type;
        $clone_admin_product_type = $clone_admin_product_type->pluck('size')->toArray();

        $dbSizes = explode(',', $clone_admin_product_type[0]);
        $compared_size = in_array($request->size, $dbSizes);

    if($compared_size == 0)
        return sendError("Wrong size ",[]);

        $product->user_id = $request->user_id??$product->user_id??$request->user()->id;
        $product->admin_product_id = $request->admin_product_id??$product->admin_product_id??$request->admin_product()->id;
        $product->admin_product_type_id = $request->admin_product_type_id??$product->admin_product_type_id??$request->admin_product_type()->id;
        $product->size = ($request->size);
        $product->description = $request->description??$product->description;
        $product->price = $request->price??$product->price;

    // product ingredient
    $product_ingredient = PurchaseList::where('product_id', $request->product_id);

    if($product_ingredient == null)
        $product_ingredient = new PurchaseList;

    $product_ingredient->quantity = $request->quantity;
    // $product_ingredient->product_id = $request->product_id??$request->product()->id;
    // $product_ingredient->ingredient_id = $request->ingredient_id??$request->ingrediant->id;


    $product->save();

            if(!$product->save())
                return sendError('There is some thing wrong, Please try again', null);

                $admin_product_type =  $admin_product_type->first();

            $data['product'] = $product;
            if(!isset($request->product_id)){
                $product_type = new ProductType;
                $product_type->product_id = $product->id;
                $product_type->type_name = $admin_product_type->type_name;
                $product_type->type_size = $admin_product_type->size;
                $product_type->save();
                if(!$product_type->save())
                    return sendError('There is some thing wrong, Please try again', null);


                foreach($request->purchase_list_id as $ingredient_id){

                    $pro_ingredient = new ProductIngredient;
                    $pro_ingredient->purchase_list_id = $ingredient_id;
                    $pro_ingredient->product_id = $product->id;
                    $pro_ingredient->quantity = $request->quantity;
                    $pro_ingredient->save();
                    if(!$pro_ingredient->save())
                        return sendError('ingredients not save',[]);

                }
                $data['product']['product_type'] = $product_type;
                $data['product']['ingredients'] = $pro_ingredient;
        }

            return sendSuccess('Product Saved', $data);
    }

    // Purchase List add and update ingredients

    public function addUpdatePurchaseList(Request $request){

        $validator = Validator::make($request->all(),[

            'purchase_list_id' => 'exists:purchase_lists,id',
            'admin_ingredient_id' => 'required|exists:admin_ingredients,id',
            'admin_ingredient_type_id' => 'required|exists:admin_ingredient_types,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
            return sendError($validator->errors()->all()[0], $data);
        }

        $ingredient = PurchaseList::where('id', $request->ingredient_id)->first();
        if($ingredient == null)
            $ingredient = new PurchaseList;

            $ingredient->id = $request->ingredient_id;
            $ingredient->admin_ingredient_id = $request->admin_ingredient_id??$ingredient->admin_ingredient_id??$request->admin_ingredient()->id;
            $ingredient->admin_ingredient_type_id = $request->admin_ingredient_type_id??$ingredient->admin_ingredient_type_id??$request->admin_ingredient_type()->id;
            $ingredient->store_name = $request->store_name;
            $ingredient->quantity = $request->quantity;
            $ingredient->price = $request->price;
            $ingredient->save();

        if($ingredient->save()){
            $data['Ingredient'] = $ingredient;
            $data['Ingredient']['adminIngredient'] = $ingredient->adminIngredient;
            $data['Ingredient']['adminIngredientType'] = $ingredient->adminIngredientType;

            return sendSuccess('Ingredient Saved', $data);
        }
        return sendError('There is some thing wrong, Please try again', null);
    }

    // get products

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
