@extends('layouts.master')

@section('content')

            <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
                        <h4 class="font-weight-bold">Brands</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="float-md-right">
                            <a href="" class="btn btn py-3 px-4 add_product_btn-s" data-toggle="modal" data-target="#add_brands-d">
                                <img src="{{ asset('assets/preview/add_button.svg') }}" width="20" id="add_course-d" class="mx-2" alt="">
                                <span class="mx-2 text-white">Add Brand</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                                @forelse ($admin_ingredient->data->ingredients as $product)
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mt-3 mb-3">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div>
                                            <p class="mb-0">Product Name</p>
                                            <strong>{{ $product->name }}</strong>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-0">Brand Name</p>
                                            <strong>{{ $product->admin_ingredient_types[0]->brand_name }}</strong>
                                        </div>
                                        <div class="text-right mt-3">
                                            <!-- <a href="javascript:void(0)"><img class="" src="{{ asset('assets/preview/edit_icon.svg') }}" alt="" /></a>
                                            <a href="javascript:void(0)"><img class="" src="{{ asset('assets/preview/delete_icon.svg') }}" alt="" /></a> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                                @empty
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Product content - END -->
    </div>

    <!-- Add Brand modal - START -->
    <div class="modal fade" id="add_brands-d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content br_15px-s">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title ml-3" id="exampleModalLongTitle">Add Brand</h5>
                </div>
                <div class="modal-body d-flex">
                    <div class="col-12 form-group mt-4">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="" id="" placeholder=" Product Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <select class="form-group tagged_select2 select2" multiple="multiple" name="type" id="ddl_product" placeholder="Brands Type">
                                    <option value="">Sugar</option>
                                    <option value="">Brown Sugar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <select class="form-group tagged_select2 select2" multiple="multiple" name="type" id="ddl_brand" placeholder="Brands Type">
                                    <option value="">Sugar</option>
                                    <option value="">Brown Sugar</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                    <a href="javascript:void(0)" class="w-50 font_20px-s font-weight-bold shadow text-center no_link-s button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Brand modal - END -->

@endsection
