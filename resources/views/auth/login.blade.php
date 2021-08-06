<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.css') }}" >
</head>

<body class='custom_body-s'>

    <div class="container">
        <!-- login page image -->
        <div class="row">
            <div class=" d-none d-lg-block col-12 col-md-12 col-xl-6 col-lg-6 text-right mt-5 mb-4">
                <img class="padding_inherit-s image-s" src="{{asset('assets/preview/login_page_img.png')}}" alt="" />
            </div>


            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-5 mb-4">
                <div class="">
                    <!-- login logo and text below -->
                    <div class="row">
                        <div class="col d-flex justify-content-around">
                            <img class="w_40-s" src="{{asset('assets/preview/logo.png')}}" alt="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 my-4 d-flex justify-content-around">
                            <h5 class="fg_blue-s"> Hello!</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5 class="mb-0"><span> Welcome to </span> <br> <span> Karyo Digital Bookkeeper </span></h5>
                        </div>
                    </div>

                    <!-- login Form - START -->
                    <div class="row">
                        <div class="col-10 col-md-6 col-xl-6 col-lg-6 offset-1 offset-md-3 offset-lg-3 offset-xl-3 mt-3">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf 
                                <div class="bg-light py-2 mt-3 w-100">
                                    <span class="align-self-center ml-2"> <i class="fa fa-envelope login_form_icon-s"></i> </span>
                                    <input class="border-0 w-75 ml-2 bg-light" type="email" name="email" id="" placeholder="Email" />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="bg-light py-2 mt-3 w-100">
                                    <span class="align-self-center ml-2"> <i class="fa fa-lock login_form_icon-s"></i> </span>
                                    <input class="border-0 w-75 ml-2 bg-light" type="password " name="password" id="" placeholder="Password"  />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="mt-5 text-center">
                                    <button class="w-75 shadow button_outline-s bg-primary-s py-3 br_30px-s text-white border-0" type="submit" >
                                        Log In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- login Form - END -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for country  -->
    <div class="modal fade" id="country_name-d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="row w-100">
                <div class="col-12 modal-content br_15px-s">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="exampleModalLongTitle">Select Country</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="w-100 py-3 rounded border-0 bg-light button_outline-s" id="">
                                <option>&nbsp<span>USA</span> </option>
                                <option>&nbsp<span>UK</span></option>
                                <option>&nbsp<span>CANADA</span></option>
                                <option>&nbsp<span>FRANCE</span></option>
                            </select>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-around border-top-0 mt-5 mb-4">
                        <a href="" class="w-50 shadow font_20px-s text-center button_outline-s no_link-s text-white border-0 bg-primary-s py-3 br_50px-s " role="button"> OKAY </a>
                    </div>
                </div>

                <div class="col-12 text-center mt-5 mr-0 px-0">
                    <a href=""><img class="w_68-s" src="{{asset('assets/preview/facebook_icon.svg')}}" alt=""></a>
                    <a href=""><img class="w_68-s" src="{{asset('assets/preview/apple_icon.svg')}}" alt=""></a>
                    <a href=""><img class="w_68-s" src="{{asset('assets/preview/google_icon.svg')}}" alt=""></a>
                </div>

            </div>
        </div>



        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script>
            $(function(event) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>

    </body>

    </html>
