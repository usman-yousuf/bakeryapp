@extends('layouts.master')

@section('content')

            <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="font-weight-bold">Overview</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                </div>

                <!-- tables - START -->
                <div class="row py-3">
                    <!-- All User Table -->
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <div class="card border-0 shadow br_15px-s table_scroll-s h_card-s">
                            <div class="card-body table_scroll-s m-4">
                                <div class="d-flex justify-content-between w-100">
                                    <h5>All users</h5>
                                    <span class=" ">
                                    <a class="view_link-s" href="{{ route('getusers') }}"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Phone Number</th>
                                                <th class="">Shop Name</th>
                                                <th class="">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if( isset($get_user['get_user']->data) )
                                            @forelse ($get_user['get_user']->data as $user)
                                            <tr>
                                                <td class="">{{ $user->name ?? '' }}</td>
                                                <td class=""><span> {{ $user->phone_code ?? '' }}</span> <span>{{ $user->phone_number ?? ''  }}</span></td>
                                                <td class="fg_pink-s"> {{ $user->bussiness_name ?? '' }}</td>
                                                <td class="fg_blue-s">{{ $user->email ?? '' }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center">--No User--</td>
                                            </tr>
                                            @endforelse
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Top Seller Table -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt-3 mt-xl-0 mt-lg-0 mt-md-3">
                        <div class="card border-0 shadow br_15px-s table_scroll-s h_card-s">
                            <div class="card-body table_scroll-s m-4">
                                <div class="d-flex justify-content-between w-100">
                                    <h5>Top Sellers</h5>
                                    <span class=" ">
                                    <a class="view_link-s" href="{{ route('getsellers') }}"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <tbody>
                                            @if( isset($seller_info['get_seller']->data) )
                                            @forelse( $seller_info['get_seller']->data as $seller )
                                            <tr>
                                                <td class="border-top-0">{{ $seller->user->name ?? 'other' }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center">    --No Seller--   </td>
                                            <tr>
                                            @endforelse
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">
                    <!-- Top Buyer Table -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                        <div class="card border-0 shadow br_15px-s table_scroll-s h_card-s">
                            <div class="card-body table_scroll-s m-4">
                                <div class="d-flex justify-content-between w-100">
                                    <h5>Top Buyers</h5>
                                    <span class=" ">
                                    <a class="view_link-s" href="{{ route('getbuyers') }}"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <tbody>
                                            @if( isset($buyer_info['get_buyer']->data) )
                                            @forelse ($buyer_info['get_buyer']->data as $buyer)
                                            <tr>
                                                <td class="border-top-0">{{ $buyer->user->name ?? ' other'  }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center">--No Buyer--</td>
                                            </tr>

                                            @endforelse
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Most Purchased Brand Table -->
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12 mt-3 mt-xl-0 mt-lg-0 mt-md-3">
                        <div class="card border-0 shadow br_15px-s table_scroll-s h_card-s">
                            <div class="card-body table_scroll-s m-4">
                                <div class="d-flex justify-content-between w-100">
                                    <h5>Most Purchased Items</h5>
                                    <span class=" ">
                                    <a class="view_link-s" href="{{ route('getpurchaselist') }}"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Brand Name</th>
                                                <th class="">Price</th>
                                            </tr>
                                        </thead>
                                            @if( isset($most_purchased_items['get_purchaselists']->data) )

                                            @forelse ( $most_purchased_items['get_purchaselists']->data as $key => $purchase_item )

                                            <tr>
                                                <th class="">{{ $purchase_item->admin_ingredient->name }}</th>
                                                <th class="">{{ $purchase_item->admin_ingredient_type->brand_name }}</th>
                                                <th class="">{{ $purchase_item->price }}</th>
                                            </tr>

                                            @empty

                                            <tr>
                                                <th class="text-center">No item Found in Purchase List</th>
                                            <tr>

                                            @endforelse

                                            @else

                                            <tr>
                                                <th class="text-center">No item Found in Purchase List</th>
                                            <tr>

                                            @endif


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- tables - END -->


                <!-- subscription heading and cards - START -->
<!--                 <div class="row py-3">
                    <div class="col">
                        <h4 class="mb-0">Latest Subscriptions</h4>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-md-2 my-2 my-xl-0 my-lg-0">
                        <div class="card border-0 shadow br_15px-s">
                            <div class="d-flex card-body">
                                <div class="bg_blue-s w-25 text-center">
                                    <h1 class="text-white"> A</h1>
                                </div>
                                <div class="ml-4">
                                    <h6 class="mb-0 fg_blue-s"> Application One</h6>
                                    <p class="mb-0"> Premium Plan</p>
                                    <span class=""><span class="fg_pink-s"> $ </span> <span class="fg_pink-s">15.25</span>/month</span>
                                </div>
                            </div>
                            <div class="card-body pt-0 fg_blue-s">
                                <span>Next Payment <span>21</span> <span>january</span> <span>2021</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-md-2 my-2 my-xl-0 my-lg-0">
                        <div class="card border-0 shadow br_15px-s">
                            <div class="d-flex card-body">
                                <div class="bg_blue-s w-25 text-center">
                                    <h1 class="text-white"> B</h1>
                                </div>
                                <div class="ml-4">
                                    <h6 class="mb-0 fg_blue-s"> Application One</h6>
                                    <p class="mb-0"> Premium Plan</p>
                                    <span class=""><span class="fg_pink-s"> $ </span> <span class="fg_pink-s">15.25</span>/month</span>
                                </div>
                            </div>
                            <div class="card-body pt-0 fg_blue-s">
                                <span>Next Payment <span>21</span> <span>january</span> <span>2021</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 my-md-2 my-2 my-xl-0 my-lg-0">
                        <div class="card border-0 shadow br_15px-s">
                            <div class="d-flex card-body">
                                <div class="bg_blue-s w-25 text-center">
                                    <h1 class="text-white"> C</h1>
                                </div>
                                <div class="ml-4">
                                    <h6 class="mb-0 fg_blue-s"> Application One</h6>
                                    <p class="mb-0"> Premium Plan</p>
                                    <span class=""><span class="fg_pink-s"> $ </span> <span class="fg_pink-s">15.25</span>/month</span>
                                </div>
                            </div>
                            <div class="card-body pt-0 fg_blue-s">
                                <span>Next Payment <span>21</span> <span>january</span> <span>2021</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- subscription heading and cards - END --> 

            </div>



@endsection



