<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('adminFrontend/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/fontawesome/css/all.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/style.css')}}">



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo logo-normal">
                    <img src="{{asset('adminFrontend/assets/img/logo.png')}}" alt="">
                </a>
                <a href="index.html" class="logo logo-white">
                    <img src="{{asset('adminFrontend/assets/img/logo-white.png')}}" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{asset('adminFrontend/assets/img/logo-small.png')}}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ...">
                                <div class="search-addon">
                                    <span><img src="{{asset('adminFrontend/assets/img/icons/closes.svg')}}" alt="img"></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="{{asset('adminFrontend/assets/img/icons/search.svg')}}" alt="img"></a>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{asset('adminFrontend/assets/img/profiles/avator1.jpg')}}" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{asset('adminFrontend/assets/img/profiles/avator1.jpg')}}" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                           logout
                            </button>
                            
                            </form>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{route('dashboard')}}"><img src="{{asset('adminFrontend/assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                    Slider</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('addSupplierPage')}}">Add Slider</a></li>
                                <li><a href="{{route('supplierList')}}">Slider List</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                    Team</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{route('addProductPage')}}">Add Member</a></li>
                                <li><a href="{{route('productList')}}">Member List</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/sales1.svg')}}" alt="img"><span>
                                    Gallery</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('addOrderPage')}}">Add Photo </a></li>
                                <li><a href="{{route('orderList')}}">Photos</a></li>
                            <!---    <li><a href="pos.html">POS</a></li>
                                <li><a href="pos.html">New Sales</a></li>
                                <li><a href="salesreturnlists.html">Sales Return List</a></li>
                                <li><a href="createsalesreturns.html">New Sales Return</a></li> ----->
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/purchase1.svg')}}" alt="img"><span>
                                    Portfolio</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{route('addPurchasePage')}}">Add Catagory</a></li>
                                <li><a href="{{route('purchaseList')}}">Catagory List</a></li>
                                <li><a href="{{route('purchaseList')}}">Add Portfolio</a></li>
                                <li><a href="{{route('purchaseList')}}">Portfolio List</a></li>
                                
                            <!--    <li><a href="importpurchase.html">Import Purchase</a></li>   --->
                            </ul>
                        </li>
                       

                       
                        
                        
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/time.svg')}}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                
                                
                                <li><a href="{{route('saleReport')}}">Add Product</a></li>
                               
                                <li><a href="{{route('purchaseReport')}}">Product List</a></li>
                                
                                
                            </ul>
                        </li>
                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                    Contact</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('addEmployeePage')}}">Messages</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <main>
        {{ $slot }}
    </main>
    </div>



    <script src="{{asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js02"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    
    <script src="{{asset('adminFrontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/script.js')}}"></script>
</body>

</html>