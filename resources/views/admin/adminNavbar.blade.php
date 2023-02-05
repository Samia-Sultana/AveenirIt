

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
                                <li><a href="{{route('addSliderPage')}}">Add Slider</a></li>
                                <li><a href="{{route('sliderList')}}">Slider List</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                    Team</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{route('addTeamPage')}}">Add Member</a></li>
                                <li><a href="{{route('teamList')}}">Member List</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/sales1.svg')}}" alt="img"><span>
                                    Gallery</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('addGalleryPage')}}">Add Photo </a></li>
                                <li><a href="{{route('galleryList')}}">Photos</a></li>
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
                            <li><a href="{{route('addCatagoryPage')}}">Add Catagory</a></li>
                                <li><a href="{{route('catagoryList')}}">Catagory List</a></li>
                                <li><a href="{{route('addPortfolioPage')}}">Add Portfolio</a></li>
                                <li><a href="{{route('portfolioList')}}">Portfolio List</a></li>
                                
                            <!--    <li><a href="importpurchase.html">Import Purchase</a></li>   --->
                            </ul>
                        </li>
                       

                       
                        
                        
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/time.svg')}}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                
                                
                                <li><a href="{{route('addProductPage')}}">Add Product</a></li>
                               
                                <li><a href="{{route('productList')}}">Product List</a></li>

                                <li><a href="{{route('addProductPortfolioPage')}}">Add Product Portfolio</a></li>
                               
                                <li><a href="{{route('productPortfolioListAll')}}">Product Portfolio List</a></li>
                                
                                
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/time.svg')}}" alt="img"><span>
                                    Client</span> <span class="menu-arrow"></span></a>
                            <ul>
                                
                                
                                <li><a href="{{route('addClientPage')}}">Add Client</a></li>
                               
                                <li><a href="{{route('clientList')}}">Client List</a></li>
                                
                                
                            </ul>
                        </li>
                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                    Contact</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('contactList')}}">Messages</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
   
    </div>

