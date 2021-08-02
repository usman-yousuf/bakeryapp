<?php

namespace App\Http\Controllers;

use App\Models\AdminProductType;
use App\Models\Order;
use App\Models\Product;
use App\Models\PurchaseList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateOrder(Request $request){

        $validator = Validator::make($request->all(),[

            'client_name' => 'required_without:order_id|string',
            'phone_number' => 'required_without:order_id|numeric',
            'delivery_address' => 'required_without:order_id|string',
            'user_id' => 'required_without:order_id|exists:users,id',
            'product_id' => 'required_without:order_id|exists:products,id',
            'admin_product_type_id' => 'required_without:order_id|exists:admin_product_types,id',
            'order_status' => 'required_with:order_id,product_id|in:new-order,in-baking,ready-to-deliver,sold,other',
            'advance_payment' => 'required_without:order_id|integer',
            'order_id' => 'numeric|exists:orders,id',

        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
        }

        $order = Order::where('id',$request->order_id)->first();
        if(NULL == $order)
            $order = new Order;

        if(!isset($request->order_id)){


        $admin_product_type = AdminProductType::where('id',$request->admin_product_type_id)->first();
        if(NULL == $admin_product_type)
            return sendError('Admin Product Type Does Not Exist',[]);

        $product = Product::where('id',$request->product_id)->where('admin_product_type_id',$admin_product_type->id)->first();
        if(NULL == $product)
            return sendError('Product Does Not Exist',[]);
        }

        $order->product_id = $product->id ?? $order->product_id;
        $order->user_id = $request->user_id ?? $order->user_id;
        $order->admin_product_type_id = $admin_product_type->id ?? $order->admin_product_type_id;
        $order->client_name = $request->client_name ?? $order->client_name;
        $order->phone_code = '+92';
        $order->phone_number = $request->phone_number ?? $order->phone_number;
        $order->delivery_address = $request->delivery_address ?? $order->delivery_address;
        $order->order_status = $request->order_status;
        $order->advance_payment = $request->advance_payment ?? $order->advance_payment;
        $order->save();
        if(!$order->save())
            return sendError('Order not saved',[]);

        $data['order'] = Order::where('id', $order->id)->first();
        return sendSuccess('Order Saved',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOrder(Request $request){

        $validator = Validator::make($request->all(),[

            'user_id' => 'exists:users,id|numeric',
            'order_id' => 'exists:orders,id|numeric',

        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
        }

        $order = Order::orderBy('created_at', 'DESC');

        if(isset($request->user_id)){
            $order = $order->where('user_id', $request->user_id);
            $order = $order->get();
        }
        if(isset($request->order_id)){
            $order = $order->where('id',$request->order_id);
            $order = $order->first();
        }


        return sendSuccess('Order',$order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function analytics(Request $request){
        
        $validator = Validator::make($request->all(),[

            'month' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
        }

        $purchase = PurchaseList::where('user_id',$request->user_id);
        $sale = order::where('user_id',$request->user_id);

        $data['purchase'] =  $purchase->pluck('price')->sum();
        $data['sale'] =  $sale->pluck('advance_payment')->sum();

        return $data;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
