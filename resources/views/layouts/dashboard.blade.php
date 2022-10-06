<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{asset('adminAssets/img/angels-logo2.png')}}" type="image/png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{asset('adminAssets/vendors/datepicker/date-picker.css')}}" />

     <link rel="stylesheet" href="{{asset('adminAssets/vendors/vectormap-home/vectormap-2.0.2.css')}}" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{asset('adminAssets/vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{asset('adminAssets/vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{asset('adminAssets/css/metisMenu.css')}}">
    <!-- style CSS -->
    
    <link rel="stylesheet" href="{{asset('adminAssets/css/colors/default.css')}}" id="colorSkinCSS">
    <!-- Styles -->
   <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('adminAssets/css/style.css')}}" />

</head>
<body class="crm_body_bg"> 
    <nav class="sidebar">
        <div class="logo d-flex">
            <a class="large_logo m-auto" href="index-2.html"><img src="{{asset('adminAssets/img/angels-logo1.png')}}" alt=""></a>
            <a class="small_logo" href="index-2.html"><img src="{{asset('adminAssets/img/angels-logo2.png')}}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li>
                <a href="{{route('admin-home')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/dashboard.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('view-customers')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/profile.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Customers</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('products')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/product.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Products</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('categories')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/2.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Category</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('viewOrders')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/4.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Orders</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('viewCustomOrders')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/4.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Custom Orders</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('viewImages')}}">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/image.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Images</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/orders.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Invoices</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/15.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Settings</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="nav_icon_small">
                        <img src="{{asset('adminAssets/img/menu-icon/profile.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Profile</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <label class="switch_toggle d-none d-lg-block" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="slider round open_miniSide"></div>
                        </label>
                        <div class="header_center">
                            <h3 class="theme-text font-weight-bold">{{ config('app.name', 'Laravel') }}</h3>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <div class="serach_button">
                                        <i class="ti-search"></i>
                                        <div class="serach_field-area d-flex align-items-center">
                                            <div class="search_inner">
                                                <form action="#">
                                                    <div class="search_field text-right">
                                                        <input type="text" placeholder="Search here..." >
                                                    </div>
                                                    <button class="close_search"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                            <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="{{asset('adminAssets/img/client_img.png')}}" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <h5>{{ Auth::user()->name }}</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </section>
    
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      
    <script src="{{asset('adminAssets/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('adminAssets/js/popper.min.js')}}"></script>
    <!-- bootstarp js -->
    <script src="{{asset('adminAssets/js/bootstrap.min.js')}}"></script>
    <!-- sidebar menu  -->
    <script src="{{asset('adminAssets/js/metisMenu.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('adminAssets/vendors/count_up/jquery.waypoints.min.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('adminAssets/vendors/chartlist/Chart.min.js')}}"></script>
    <!-- counterup js -->
    <script src="{{asset('adminAssets/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <!-- nice select -->
    <script src="{{asset('adminAssets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('adminAssets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <!-- responsive table -->
    <script src="{{asset('adminAssets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datatable/js/buttons.print.min.js')}}"></script>

    <!-- datepicker  -->
    <script src="{{asset('adminAssets/vendors/datepicker/datepicker.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datepicker/datepicker.en.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/datepicker/datepicker.custom.js')}}"></script>

    <script src="{{asset('adminAssets/js/chart.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/chartjs/roundedBar.min.js')}}"></script>

    <!-- progressbar js -->
    <script src="{{asset('adminAssets/vendors/progressbar/jquery.barfiller.js')}}"></script>
    <!-- tag input -->
    <script src="{{asset('adminAssets/vendors/tagsinput/tagsinput.js')}}"></script>
    <!-- text editor js -->
    <script src="{{asset('adminAssets/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/am_chart/amcharts.js')}}"></script>
    <!-- vector map  -->
    <script src="{{asset('adminAssets/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

    <script src="{{asset('adminAssets/vendors/echart/echarts.min.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset('adminAssets/js/dashboard_init.js')}}"></script>
    <script src="{{asset('adminAssets/js/custom.js')}}"></script>
    @stack('scripts')
</body>
</html>
