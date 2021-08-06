@extends('layouts.master')

@section('content')

            <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="font-weight-bold">Purchased Items</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                </div>

                <!-- table - START -->
                <div class="row py-3">
                    <div class="col-12">
                        <!-- Purchased Items Table -->
                        <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                            <div class="card-body table_scroll-s m-4">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Brand Name</th>
                                                <th class="">Quantity</th>
                                                <th class="">Total Money</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- dd() -->
                                            @if( isset($get_purchaselists->data) )
                                            @foreach ( $get_purchaselists->data as $list )
                                            <tr>
                                                <td class="">{{ $list->admin_ingredient->name ?? '' }}</td>
                                                <td class="">{{ $list->admin_ingredient_type->brand_name ?? '' }}</td>
                                                <td class=""><span>{{ $list->quantity ?? '' }}</span> kg</td>
                                                <td class=" fg_pink-s"> $ {{ $list->price ?? '' }}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table - END -->
            </div>
        </div>
        <!-- Purchased items content - END -->
    </div>

@endsection
