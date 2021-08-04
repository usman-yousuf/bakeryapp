@extends('layouts.master')

@section('content')


{{dd($get_seller)}}

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
                                    <a class="view_link-s" href="javascript: void"> See All</a>
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
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                                <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                <td class="fg_pink-s"> Bakery Shop</td>
                                                <td class="fg_blue-s">john@example.com</td>
                                            </tr>
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
                                    <a class="view_link-s" href="javascript:void"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
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
                                    <a class="view_link-s" href="javascript: void"> See All</a>
                                </span>
                                </div>
                                <div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
                                            <tr>
                                                <td class="">John</td>
                                            </tr>
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
                                    <a class="view_link-s" href="javascript: void"> See All</a>
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
                                        <tbody>
                                            <tr>
                                                <td class="">Sugar</td>
                                                <td class="">Yum Sugar</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>
                                            <tr>
                                                <td class="">Chicken Msalah</td>
                                                <td class="">Shan</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>
                                            <tr>
                                                <td class="">Oil</td>
                                                <td class="">Shan</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>
                                            <tr>
                                                <td class="">Cup Cake</td>
                                                <td class="">Halal</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>
                                            <tr>
                                                <td class="">Choclate</td>
                                                <td class="">Dairy Milk</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>
                                            <tr>
                                                <td class="">Biscuits</td>
                                                <td class="">Super</td>
                                                <td class="">$ <span>90</span> /kg</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- tables - END -->


                <!-- subscription heading and cards - START -->
                <div class="row py-3">
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
                <!-- subscription heading and cards - END -->

            </div>

        
        
@endsection



