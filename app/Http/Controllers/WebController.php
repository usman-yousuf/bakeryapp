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
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ProductController;

class WebController extends Controller
{

    public function __construct(ProductController $ProductController,
    UserController $UserController,
    SubscriptionController $SubscriptionController)
    {
        $this->ProductController = $ProductController;
        $this->UserController = $UserController;
        $this->SubscriptionController = $SubscriptionController;
    }



    public function webGetProducts(Request $request){

        $request->user_id = $request->user_id ?? 6;

        $get_product = $this->ProductController->getProducts($request)->getdata();

        return view('pages.products', [ 'get_product' => $get_product ]);
    }

    public function webGetSellers(Request $request){

    	$get_seller = $this->UserController->mostSeller($request)->getdata();

        return view('pages.top_seller', [ 'get_seller' => $get_seller ]);
    }    

    public function webGetBuyers(Request $request){

        $get_buyer = $this->UserController->mostBuyers($request)->getdata();

        return view('pages.top_buyers', [ 'get_buyer' => $get_buyer ]);
    }

    /**
     * All users for implementation in user page
     *
     * @param Request $request
     * @return void
     */

    public function webGetUsers(Request $request){

        $get_user = $this->UserController->getUser($request)->getdata();
        return view('pages.users', [ 'get_user' => $get_user]);
    }

    /**
     * All users for implementation in user page
     *
     * @param Request $request
     * @return void
     */

    public function userManagement(Request $request){

        $get_user = $this->UserController->getUser($request)->getdata();
        return view('pages.user_management', [ 'get_user' => $get_user]);
    }

    /**
     * All purchase lists for implementation in purchased item page
     *
     * @param Request $request
     * @return void
     */
    public function webGetPurchaseList(Request $request){


        $request->merge(['user_id' => 1]);

        $get_purchaselists = $this->ProductController->searchPurchaseList($request)->getdata();
        return view('pages.purchased_item', [ 'get_purchaselists' => $get_purchaselists]);
    }

    /**
     * Get all subscriptions for implementation on subscription page
     *
     * @param Request $request
     * @return void
     */

    public function webGetSubscription(Request $request){

        $get_subscription = $this->SubscriptionController->getSubscription($request)->getdata();
        return view('pages.subscription', [ 'get_subscription' => $get_subscription]);
    }

}
