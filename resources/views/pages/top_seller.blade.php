@extends('layouts.master')

@section('content')

{{--  {{ dd($get_seller) }}  --}}
            <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="font-weight-bold">Top Seller's</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                </div>

                <!-- table - START -->
                <div class="row py-3">
                    <div class="col-12">
                        <!-- Top Seller Table -->
                        <div class="card border-0 shadow br_15px-s table_scroll-s card_700px_h-s">
                            <div class="card-body table_scroll-s m-4">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Name</th>
                                                <th class="">Phone Number</th>
                                                <th class="">Location</th>
                                                <th class="">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($get_seller->data as $seller)
                                            <tr>
                                                <td class="">{{ $seller->user->name ?? 'None' }}</td>
                                                <td class=""><span>{{ $seller->user->phone_code ?? 'None' }}</span> <span>{{ $seller->user->phone_number ?? 'None' }}</span></td>
                                                <td class="">{{ $seller->user->address->address ?? 'None' }}</td>
                                                <td class="fg_blue-s">{{ $seller->user->email ?? 'None' }}</td>
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
        </div>
        <!-- Top Seller content - END -->
    </div>

@endsection
