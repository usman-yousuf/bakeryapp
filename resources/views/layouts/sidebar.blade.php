

    <!-- Sidebar - START -->
    <div class="bg-primary-s" id="sidebar-wrapper" style="width: 300px;">
        <div class="sidebar-heading text-center py-4">
            <h5 class="text-white">Hello Bakery</h5>
            <span class="text-white">Check Your Current Status!</span>
        </div>
        <div class=" list-group-flush sidebar_text-s">
            <a href="{{route('dashboard')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/Dashboard_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Dashboard</span>
            </a>
            <a href="{{route('getproducts')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/product_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Products</span>
            </a>
            <a href="{{route('brands')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/brand_icon.svg') }}" class=" revert_icon_color-s " width="25" alt="">
                <span class=" font_size-s">Ingredients</span>
            </a>
            <a href="{{route('getusers')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/user_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">All Users</span>
            </a>
            <a href="{{route('getpurchaselist')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/purchased_items_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Purchased Items</span>
            </a>
            <a href="{{route('purchased_brand')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/purchased_brand_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Purchased Brands</span>
            </a>
            <a href="{{route('getsellers')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/top_seller_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Top Sellers</span>
            </a>
            <a href="{{route('getbuyers')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/top_buyer_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Top Buyers</span>
            </a>
            <a href="{{route('usermanagement')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/user_management_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">User Management</span>
            </a>
            <a href="{{route('getsubscription')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/subscription_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Subscription</span>
            </a>
            <a href="{{route('subscription_plan')}}" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/subscription_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Subscription Plan</span>
            </a>
            <a href="#" class="list-group-item py-3 mx-3">
                <img src="{{ asset('assets/preview/advertisement_icon.svg') }}" class="" width="25" alt="">
                <span class=" font_size-s">Advertisement</span>
            </a>
        </div>
    </div>
    <!-- Sidebar - END -->

        <div class="w-100">

