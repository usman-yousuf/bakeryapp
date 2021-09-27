@extends('layouts.master')

@section('content')

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
                        <table class="table product_info_table-d">
                            <thead>
                                <tr>
                                    <th class="">Name</th>
                                    <th class="">Inches</th>
                                    <th class="">Layers</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($get_product->data->products as $admin_product)
                                @if($admin_product->country == Session::get('country') )
                                <tr>
                                    {{--  {{ dd($admin_product->admin_product_types[1]) }}  --}}
                                    <td class="product-d">{{ $admin_product->name ?? NULL }}</td>
                                    <td class="product-id d-none">{{ $admin_product->id ?? NULL }}</td>

                                    @for ($i = 0; $i < 2; $i++)
                                    <td class="item-d">
                                        <span class="type-d_{{$i}}">{{ $admin_product->admin_product_types[$i]->type_name ?? 'None' }}</span><br>
                                        <span class="type-id_{{$i}} d-none">{{ $admin_product->admin_product_types[$i]->id ?? ''}}</span><br>
                                    </td>
                                    @endfor
                                    {{--  $admin_product->admin_product_types  --}}
                                    <td>
                                        <a href="javascript:void(0)" class="to_edit_product-d" data-toggle="modal" data-target="#edit_product-d"><img src="{{ asset('assets/preview/edit_icon.svg') }}" alt=""></a>
                                        <a href="{{ route('delete_product',$admin_product->id) }}"><img src="{{ asset('assets/preview/delete_icon.svg') }}" alt=""></a>
                                    </td>
                                </tr>
                                @endif
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
            <form action="{{ route('add_product') }}" method="post">
                @csrf
                <div class="modal-body d-flex">
                        <div class="col-12 form-group mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="product_name"
                                        id="product_name-d"
                                        placeholder=" Product Name" required>
                                </div>
                                @error('product_name')
                                        <strong class="w-100 m-2 p-2 alert-danger">{{ $message }}</strong>
                                @enderror 
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <input type="text"
                                        class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="type_name_1"
                                        id="type_name_1-d"
                                        placeholder="Inches">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="type_name_2"
                                        id="type_name_2-d" placeholder="Layers">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                    <a href="" class="w-25 font_20px-s font-weight-bold no_link-s shadow text-center button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button" id="add_product">
                     <button type="submit" class="btn">
                     Save

                     </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add product modal - END -->

<!-- Edit product modal - START -->
<div class="modal fade product_to_be_edited-d" id="edit_product-d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content br_15px-s">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title ml-3" id="exampleModalLongTitle">Edit Products</h5>
            </div>
            <form action="{{ route('edit_product') }}" method="post">
                @csrf
                <div class="modal-body d-flex">
                        <div class="col-12 form-group mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="product_name"
                                        id="edit_product_name-d"
                                        placeholder=" Product Name" required
                                        data-product="name">

                                        <input type="hidden" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="hidden_edit_product_name-d"
                                        id="hidden_edit_product_name-d"
                                        placeholder=" Product Name" required
                                        data-product="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <input type="text"
                                        class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="type_name_1"
                                        id="edit_type_name_1-d"
                                        placeholder=" Type 1"
                                        data-product="type1">

                                        <input type="hidden" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="hidden_edit_type_name_1-d"
                                        id="hidden_edit_type_name_1-d"
                                        placeholder=" Product Name" required
                                        data-product="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="edit_type_name_2-d"
                                        id="edit_type_name_2-d" placeholder=" Type 2"
                                        data-product="type2">

                                        <input type="hidden" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="hidden_edit_type_name_2-d"
                                        id="hidden_edit_type_name_2-d"
                                        placeholder=" Product Name" required
                                        data-product="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <input type="text" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="type_name_3"
                                        id="edit_type_name_3-d" placeholder=" Type 3"
                                        data-product="type3">

                                        <input type="hidden" class="w-100 py-3 my-2 rounded border-0 bg_gray-s button_outline-s"
                                        name="hidden_edit_type_name_3-d"
                                        id="hidden_edit_type_name_3-d"
                                        placeholder=" Product Name" required
                                        data-product="name">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                    <a href="" class="w-25 font_20px-s font-weight-bold no_link-s shadow text-center button_outline-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button" id="add_product">
                     <button type="submit" class="btn">
                     Save

                     </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit product modal - END -->


@endsection
