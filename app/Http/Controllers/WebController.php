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
    SubscriptionController $SubscriptionController,
    AuthController $AuthController,
    AdminProductController $AdminProductController)
    {
        $this->ProductController = $ProductController;
        $this->UserController = $UserController;
        $this->SubscriptionController = $SubscriptionController;
        $this->AuthController = $AuthController;
        $this->AdminProductController = $AdminProductController;
    }


    public function webLogin(Request $request){
    

        $auth = $this->AuthController->login($request)->getdata();

        if($auth->status)
            return redirect()->route('dashboard');
        else{

            dd($auth);
            return view('auth.login')->withErrors($auth);
        }
    }


    /**
     * All products for implementation in product page
     *
     * @param Request $request
     * @return void
     */

    public function webGetProducts(Request $request){
        $request->user_id = $request->user_id ?? 6;
        $request->merge([
            'should_get_admin_products' => true,
        ]);

        $get_product = $this->AdminProductController->getIngredientProducts($request)->getData();

        return view('pages.products', [ 'get_product' => $get_product ]);
    }

    public function webGetBrands(Request $request){
        $request->user_id = $request->user_id ?? 6;
        $request->merge([
            'ingredients' => (int)true,
        ]);

        $admin_ingredient = $this->AdminProductController->getIngredientProducts($request)->getData();
        // dd($admin_ingredient);

        return view('pages.brands', [ 'admin_ingredient' => $admin_ingredient ]);

    }

    /**
     * All top seller for implementation in top seller page
     *
     * @param Request $request
     * @return void
     */

    public function webGetSellers(Request $request){

    	$get_seller = $this->UserController->mostSeller($request)->getdata();

        return view('pages.top_seller', [ 'get_seller' => $get_seller ]);
    }


    /**
     * All top buyers for implementation in top buyers page
     *
     * @param Request $request
     * @return void
     */

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
     * All users for implementation in user management page
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


        $request->merge([
            'user_id' => 10,
            'webGetPurchaseList' => (int)true,
        ]);

        $get_purchaselists = $this->ProductController->searchPurchaseList($request)->getdata();
        return view('pages.purchased_item', [ 'get_purchaselists' => $get_purchaselists]);
    }

    /**
     * All subscriptions for implementation on subscription page
     *
     * @param Request $request
     * @return void
     */

    public function webGetSubscription(Request $request){

        $get_subscription = $this->SubscriptionController->getSubscription($request)->getdata();
        return view('pages.subscription', [ 'get_subscription' => $get_subscription]);
    }

    /**
     * All information of dashboard page
     *
     * @param Request $request
     * @return void
     */

    public function dashboard(Request $request){

        $request->merge([
            'offset' => 0,
            'limit' => 10,
            'mostPurchasedItems' => true
        ]);
        $get_user = $this->webGetUsers($request)->getdata();
        $seller_info = $this->webGetSellers($request)->getdata();
        $buyer_info = $this->webGetBuyers($request)->getdata();
        $most_purchased_items = $this->webGetPurchaseList($request)->getdata();


        return view('pages.dashboard')->with(compact(['get_user','seller_info','buyer_info','most_purchased_items']));

    }

    public function add_product(Request $request){
        dd($request->all());
    }


}
