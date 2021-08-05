<?php

namespace App\Http\Controllers;

use App\Models\AdminIngredient;
use App\Models\AdminIngredientType;
use App\Models\AdminProduct;
use App\Models\AdminProductType;
use App\Models\Ingrediant;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductIngrediant;
use App\Models\ProductIngredient;
use App\Models\PurchaseList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser(Request $request){

    	$user = User::where('id','<>',NULL);
    	if(isset($request->limit))
            $user->offset($request->offset??0)->limit($request->limit);

        $user = $user->get();

        return sendSuccess('Users',$user);
    }

    public function mostSeller(){

    	$sellers = Order::select('user_id')->groupBy('user_id')->orderByRaw('COUNT(*) DESC')->with(['user'])->get();

    	return sendSuccess('Top Sellers',$sellers);
    }

    public function mostBuyers(){

    	$buyer = PurchaseList::select('user_id')->groupBy('user_id')->orderByRaw('COUNT(*) DESC')->with(['user'])->get();

    	return sendSuccess('Top buyer',$buyer);
    }

    public function deleteUser(Request $request){


        // dd('DumpMan');
        dd($request->all());
        return $request->all();
    }

}
