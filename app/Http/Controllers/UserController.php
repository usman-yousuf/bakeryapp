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
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request){

    	$user = User::where('password','<>',NULL);
    	if(isset($request->limit))
            $user->offset($request->offset??0)->limit($request->limit);

        $user = $user->get();

        return sendSuccess('Users',$user);
    }
}
