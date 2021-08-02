<?php

namespace App\Http\Controllers;

use App\Models\AdminProductType;
use App\Models\Order;
use App\Models\Product;
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

        'client_name' => 'required|string',
        'phone_number' => 'required|numeric',
        'delivery_address' => 'required|string',
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'admin_product_type_id' => 'required|exists:admin_product_types,id',
        'order_status' => 'required|in:new-order,in-baking,ready-to-deliver,sold,other',
        'advance_payment' => 'required|integer',
        'order_id' => 'exists:orders,id',
        ]);

        if($validator->fails()){
            $data['validation_error'] = $validator->getMessageBag();
                return sendError($validator->errors()->all()[0], $data);
        }

        $order = Order::where('id',$request->order_id)->first();
        if(NULL == $order)
            $order = new Order;

        $product = Product::where('id',$request->product_id)->first();
        if(NULL == $product)
            return sendSuccess('Product Does Not Exist',[]);
        $admin_product_type = AdminProductType::where('id',$request->admin_product_type_id)->first();
        if(NULL == $admin_product_type)
            return sendSuccess('Admin Product Type Does Not Exist',[]);                

        $order->product_id = $product->id;
        $order->user_id = $request->user_id;
        $order->admin_product_type_id = $admin_product_type->id;
        $order->client_name = $request->client_name;
        $order->phone_code = '+92';
        $order->phone_number = $request->phone_number;
        $order->delivery_address = $request->delivery_address;
        $order->order_status = $request->order_status;
        $order->advance_payment = $request->advance_payment;
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
