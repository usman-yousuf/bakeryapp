            <!-- nav bar - START -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between border-bottom">

                <!-- search input - START -->
                <form class="form-inline my-2">
                    <div class="d-flex bg-light py-2 br_20px-s">
                        <span class="align-self-center ml-2"> <i class="fa fa-search search_icon-s"></i> </span>
                        <input class="border-0 w-100 ml-2 bg-light br_20px-s" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
                <!-- search input - END -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- nav bar list - START -->
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item border-0">
                            <a class="nav-link mx-lg-5" href="#">
                                <img src="{{asset('assets/preview/map_pin.svg')}}" alt="" class="border-0" width="11"> 
                                    <select class="border-0 text-white  rounded bg_blue-s">
                                        <option class="border-0" value="">USA</option>
                                        <option class="border-0" value="">Pakistan</option>
                                    </select>
                            </a>
                        </li>
                        <li class="nav-item mx-lg-5">
                            <a class="nav-link" href="#"><img src="{{asset('assets/preview/bell_icon.svg')}}" alt="" class="" width="20"></a>
                        </li>
                        <li>
                            <img src="{{ asset('assets/preview/user_img.png')}}" class="rounded-circle" width="40" alt="">
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name ?? 'admin' }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <!-- <a class="dropdown-item" href="#">Setting</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- nav bar - END -->
            </nav>
            <!-- nav bar - END -->