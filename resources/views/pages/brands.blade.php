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
                                <span class="mx-2 text-white">Add Ingrediant</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                                @forelse ($admin_ingredient->data->ingredients as $key => $product)
                                @if( $product->country == Session::get('country'))
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 mt-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div>
                                                    <p class="mb-0">Product Name</p>
                                                    <strong>{{ $product->name }}</strong>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-0">Brand Name</p>
                                                    <strong>{{ $product->admin_ingredient_types[$key]->brand_name ?? 'other' }}</strong>
                                                </div>
                                                <div class="text-right mt-3">
                                                    <a href="" data-target="#edit_brands_{{$key}}" data-toggle="modal">
                                                        <img class="" src="{{ asset('assets/preview/edit_icon.svg') }}" alt="" />
                                                    </a>
                                                    <a href="{{ route('delete_ingredient_product',$product->id) }}"><img class="" src="{{ asset('assets/preview/delete_icon.svg') }}" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="modal fade" id="edit_brands_{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="{{ route('edit_brand') }}" method="post" role="form">
                                                @csrf
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content br_15px-s">
                                                        <div class="modal-header border-bottom-0">
                                                            <h5 class="modal-title ml-3" id="exampleModalLongTitle">Edit Ingrediant</h5>
                                                        </div>
                                                        <div class="modal-body d-flex">
                                                            <div class="col-12 form-group mt-4">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                                                            name="ingredient_name"
                                                                            id=""
                                                                            placeholder=" Ingredient Name"
                                                                            value="{{ $product->name }}" 
                                                                            >
                                                                            <input type="hidden" value="{{ $product->id }}" name="product_id"
                                                                            value="{{ $product->name }}"/>
                                                                            @error('ingredient_name')
                                                                                <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                                                            @enderror 
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <input class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="product_types"  placeholder="Ingredient Type" value="{{ $product->admin_ingredient_types[$key]->type_name ?? ''}}">
                                                                        <input type="hidden" name="product_ingredient_id"
                                                                         value="{{ $product->admin_ingredient_types[$key]->id ?? '' }}">
                                                                        @error('product_types')
                                                                                <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                                                        @enderror 
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <input class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"  name="brand_types"  placeholder="Brands Name" value="{{ $product->admin_ingredient_types[$key]->brand_name ?? ''}}">
                                                                        @error('brand_types')
                                                                                <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                                                        @enderror 
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                                                            <a href="javascript:void(0)" class="w-50 font_20px-s font-weight-bold shadow text-center no_link-s button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> <button class="btn" type="submit">Edit</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                @endif
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
        <form action="{{ route('add_brand') }}" method="post" role="form">
            @csrf
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content br_15px-s">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title ml-3" id="exampleModalLongTitle">Add Ingrediant</h5>
                    </div>
                    <div class="modal-body d-flex">
                        <div class="col-12 form-group mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="ingredient_name"
                                        id=""
                                        placeholder=" Ingredient Name"
                                        >
                                        @error('ingredient_name')
                                            <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                        @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <input class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s" name="product_types[]"  placeholder="Ingredient Type">
                                    @error('ingredient_name')
                                            <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                    @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <input class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"  name="brand_types[]"  placeholder="Brands Name">
                                    @error('ingredient_name')
                                            <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                    @enderror 
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                        <a href="javascript:void(0)" class="w-50 font_20px-s font-weight-bold shadow text-center no_link-s button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> <button class="btn" type="submit">Save</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Add Brand modal - END -->


@endsection
