@extends('layouts.master')

@section('content')


            <div class="container-fluid bg-light py-4">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="font-weight-bold">Users Management</h4>
                        <span>lorum ipsum is a placeholder text used commonly in websites. </span>
                    </div>
                </div>

                <!-- table - START -->
                <div class="row py-3">
                    <div class="col-12">
                        <!-- User Management Table -->
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
                                            @foreach ($get_user->data as $user)
                                            @if($user->id != Auth::user()->id)
                                            <tr>
                                                <td class="">{{ $user->name ?? '' }}</td>
                                                <td class=""><span> {{ $user->phone_code ?? '' }}</span> <span>{{ $user->phone_number ?? ''  }}</span></td>
                                                <td class="">
                                                    {{ $user->address->address ?? '' }}
                                                </td>
                                                <td class="fg_pink-s"> {{ $user->bussiness_name ?? '' }}</td>
                                                <td class="fg_blue-s">{{ $user->email ?? '' }}</td>
                                                <td>
                                                    <a href="#" ><img src="{{ asset('assets/preview/delete_icon.svg') }}" alt="" data-id='{{ $user->id}}' id='delete_user' ></a>
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
        </div>
        <!-- User Management content - END -->
    </div>

@endsection
