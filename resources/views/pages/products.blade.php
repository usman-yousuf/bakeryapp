@extends('layouts.master')

@section('content')

{{ dd($get_product->data) }}
{{-- @foreach ($get_product->data->products as $item)
    <span>{{ $item->user_id }}</span>
@endforeach --}}
    <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
                        <h4 class="font-weight-bold">Products</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="float-md-right">
                            <a href="" class="btn btn py-3 px-4 add_product_btn-s" data-toggle="modal" data-target="#add_product-d">
                                <img src="{{ asset('assets/preview/add_button.svg') }}" width="20" id="add_course-d" class="mx-2" alt="">
                                <span class="mx-2 text-white">Add Product</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- table - START -->
                <div class="row py-3">
                    <div class="col-12">
                        <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                            <div class="card-body table_scroll-s m-4">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Type 1</th>
                                                <th class="">Type 2</th>
                                                <th class="">Type 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($get_product->data->products as $item)
                                            <tr>
                                                <td class="">{{ $item->admin_product->name }}</td>
                                                {{-- {{ dd($item) }} --}}
                                                <td class=""><span>{{ $item->admin_product_type->type_name ?? NULL }}</span><br>
                                                    <span>Size:</span> <strong class="fg_blue-s">{{ $item->admin_product_type->size ?? NULL }}</strong>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="{{ asset('assets/preview/edit_icon.svg') }}" alt=""></a>
                                                    <a href="javascript:void(0)"><img src="{{ asset('assets/preview/delete_icon.svg') }}" alt=""></a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- table - END -->
            </div>
    <!-- Add product modal - START -->
    <div class="modal fade" id="add_product-d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content br_15px-s">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title ml-3" id="exampleModalLongTitle">Add Products</h5>
                </div>
                <div class="modal-body d-flex">
                    <div class="col-12 form-group mt-4">
                        <div class="row">
                            <div class="col-11 col-md-9 col-lg-12 col-xl-11">
                                <input type="text" class="w-75 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="" id="" placeholder=" Product Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex">
                                <input type="text" class="w-75 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="" id="" placeholder=" Type 1">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size-s"><span>S</span></div>
                                <input type="hidden" name="">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size_active-s"><span>M</span></div>
                                <input type="hidden" name="">
                                <div class="align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-3 shadow product_size-s"><span>L</span></div>
                                <input type="hidden" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex">
                                <input type="text" class="w-75 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="" id="" placeholder=" Type 2">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size_active-s"><span>S</span></div>
                                <input type="hidden" name="">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size_active-s"><span>M</span></div>
                                <input type="hidden" name="">
                                <div class="align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-3 shadow product_size_active-s"><span>L</span></div>
                                <input type="hidden" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex">
                                <input type="text" class="w-75 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="" id="" placeholder=" Type 3">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size_active-s"><span>S</span></div>
                                <input type="hidden" name="">
                                <div class=" align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-4 shadow product_size-s"><span>M</span></div>
                                <input type="hidden" name="">
                                <div class="align-self-center ml-4 mr-1 mr-xl-4 mr-lg-1 mr-md-3 shadow product_size_active-s"><span>L</span></div>
                                <input type="hidden" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                    <a href="javascript:void" class="w-25 font_20px-s font-weight-bold no_link-s shadow text-center button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add product modal - END -->


@endsection
