@extends('layouts.master')

@section('content')

            <div class="container-fluid bg-light py-4">
                <!-- subscription cards - START -->
                <div class="row mb-3 sub_cards-d">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="card subscription1_card-s my-2 shadow border-0 br_15px-s sub_plans-d active" data-plan="trial">
                            <div class="card-body br_15px-s">
                                <h4 class="">Free Trail</h4>
                                <h4 class="">For <span>2</span> Weeks</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="card subscription2_card-s my-2 shadow border-0 br_15px-s sub_plans-d" data-plan="basic">
                            <div class="card-body br_15px-s">
                                <h4 class="">Basic</h4>
                                <h4 class="">$ <span>15</span> Per Month</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="card subscription3_card-s my-2 shadow border-0 br_15px-s sub_plans-d" data-plan="premium">
                            <div class="card-body br_15px-s">
                                <h4 class="">Premium</h4>
                                <h4 class="">$ <span>25</span> Per Month</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subscription card - END  -->

                <div class="main_work_container-d">
                    <!-- table 1 - START -->
                    <div class="row py-3 plan_container-d trial" data-plan="trial">
                        <div class="col-12">
                            <!-- Subscription Table -->
                            <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                                <div class="card-body table_scroll-s m-4">
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="">Name</th>
                                                    <th class="">Phone Number</th>
                                                    <th class="">Location</th>
                                                    <th class="">Shop Name</th>
                                                    <th class="">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- table 1 - END -->

                    <!-- table 2 - START -->
                    <div class="row py-3 plan_container-d basic" style='display:none' data-plan="basic">
                        <div class="col-12">
                            <!-- Subscription Table -->
                            <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                                <div class="card-body table_scroll-s m-4">
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="">Name</th>
                                                    <th class="">Phone Number</th>
                                                    <th class="">Location</th>
                                                    <th class="">Shop Name</th>
                                                    <th class="">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- table 2 - END -->


                    <!-- table 3 - START -->
                    <div class="row py-3 plan_container-d premium" style='display:none' data-plan="premium">
                        <div class="col-12">
                            <!-- Subscription Table -->
                            <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                                <div class="card-body table_scroll-s m-4">
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="">Name</th>
                                                    <th class="">Phone Number</th>
                                                    <th class="">Location</th>
                                                    <th class="">Shop Name</th>
                                                    <th class="">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">John</td>
                                                    <td class=""><span>+123</span> <span>000</span> <span>000</span> <span>000</span></td>
                                                    <td class="">Plot-5, George street, 25.</td>
                                                    <td class="fg_pink-s"> Bakery Shop</td>
                                                    <td class="fg_blue-s">john@example.com</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- table 3 - END -->
                </div>
            </div>
@endsection