@extends('layouts.master')

@section('content')

            <div class="container-fluid bg-light py-4">
                <!-- subscription button - start  -->
                <div class="row">
                    <div class="w-100 col-12 text-right my-4">
                        <a href="" class="btn btn py-3 px-4 add_product_btn-s" data-toggle="modal" data-target="#add_subscription-d">
                            <img src="assets/preview/add_button.svg" width="20" id="add_course-d" class="mx-2" alt="">
                            <span class="mx-2 text-white">Add Subscription Plan</span>
                        </a>
                    </div>
                </div>
                <!-- subscription button - end  -->

                <!-- table - START -->

                <div class="row py-3 ">
                    <div class="col-12">
                        <!-- Subscription Table -->
                        <div class="card border-0 shadow br_15px-s table_scroll-s">
                            <div class="card-body table_scroll-s m-4">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Plan #</th>
                                                <th class="">Plan Name</th>
                                                <th class="">Plan Price</th>
                                                <th class="">Last Updated</th>
                                                <th class=""></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=""> 1</td>
                                                <td class="">Free Trail</td>
                                                <td class=""> $ <span>00</span></td>
                                                <td class="fg_pink-s"><span>06</span>/ <span>02</span>/ <span>2021</span></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)"><img src="assets/preview/edit_icon.svg" alt=""></a>
                                                    <a href="javascript:void(0)"><img src="assets/preview/delete_icon.svg" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""> 2</td>
                                                <td class=""> Basic</td>
                                                <td class=""> $ <span>90</span></td>
                                                <td class="fg_pink-s"><span>02</span>/ <span>05</span>/ <span>2021</span></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)"><img src="assets/preview/edit_icon.svg" alt=""></a>
                                                    <a href="javascript:void(0)"><img src="assets/preview/delete_icon.svg" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""> 3</td>
                                                <td class=""> Premium</td>
                                                <td class=""> $ <span>100</span></td>
                                                <td class="fg_pink-s"><span>06</span>/ <span>02</span>/ <span>2021</span></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)"><img src="assets/preview/edit_icon.svg" alt=""></a>
                                                    <a href="javascript:void(0)"><img src="assets/preview/delete_icon.svg" alt=""></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- table - END -->
            </div>
       

    <!-- subscription modal - START -->
    <div class="modal fade" id="add_subscription-d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content br_15px-s">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title ml-3" id="exampleModalLongTitle">Add Subscription</h5>
                </div>
                <div class="modal-body d-flex">
                    <div class="col-12 form-group mt-3">
                        <div class="row py-2">
                            <div class="col-12 bg-light br_15px-s">
                                <input type="text" class="w-100 py-2 my-2 rounded border-0 bg-light button_outline-s" name="is_product_enabled" id="" placeholder=" Name">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12 bg-light br_15px-s">
                                <input type="text" class="w-100 py-2 my-2 rounded border-0 bg-light button_outline-s" name="is_slug_enabled" id="" placeholder=" Slug">
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-12 bg-light br_15px-s">
                                <input type="text" class="w-100 py-2 my-2 rounded border-0 bg-light button_outline-s" name="is_price_enabled" id="" placeholder=" Price">
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-12 bg-light br_15px-s">
                                <select class="w-100 py-2 my-2 rounded border-0 bg-light button_outline-s" name="is_status_enabled" id="" placeholder=" Status">
                                    <option value="">Active</option>
                                    <option value="">In Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="" method="">
                        <div class="form-check ml-4 mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Purchased Module
                            </label>
                        </div>
                        <div class="form-check ml-4 mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Product Module
                            </label>
                        </div>
                        <div class="form-check ml-4 mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Sale Module
                            </label>
                        </div>
                        <div class="form-check ml-4 mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Accounts Module
                            </label>
                        </div>
                    </form>
                </div>
                <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                    <a href="javascript:void(0)" class="w-50 font_20px-s font-weight-bold shadow text-center button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- subscription modal - END -->

@endsection