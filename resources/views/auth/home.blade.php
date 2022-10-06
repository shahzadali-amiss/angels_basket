@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text" >Dashboard</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ">
                <div class="white_card card_height_100 mb_30 social_media_card">
                    <div class="white_card_header">
                        <div class="main-title">
                            <h3 class="m-0">Social media</h3>
                            <span>About Your Social Popularity</span>
                        </div>
                    </div>
                    <div class="media_thumb ml_25">
                        <img src="{{asset('adminAssets/img/media.svg')}}" alt="">
                    </div>
                    <div class="media_card_body">
                        <div class="media_card_list">
                            <div class="single_media_card">
                                <span>Followers</span>
                                <h3>35.6 K</h3>
                            </div>
                            <div class="single_media_card">
                                <span>Followers</span>
                                <h3>35.6 K</h3>
                            </div>
                            <div class="single_media_card">
                                <span>Followers</span>
                                <h3>35.6 K</h3>
                            </div>
                            <div class="single_media_card">
                                <span>Followers</span>
                                <h3>35.6 K</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Visitors by Browser</h3>
                                <span>15654 Visaitors</span>
                            </div>
                            <div class="float-lg-right float-none common_tab_btn justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div id="chart-currently"></div>
                        <div class="monthly_plan_wraper">
                            <div class="single_plan d-flex align-items-center justify-content-between">
                                <div class="plan_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('adminAssets/img/crome.png')}}" alt="">
                                    </div>
                                    <div>
                                        <h5>Chrome Users</h5>
                                        <span>Today</span>
                                    </div>
                                </div>
                                <span class="brouser_btn">+2155</span>
                            </div>
                            <div class="single_plan d-flex align-items-center justify-content-between">
                                <div class="plan_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('adminAssets/img/safari.png')}}" alt="">
                                    </div>
                                    <div>
                                        <h5>Chrome Users</h5>
                                        <span>Today</span>
                                    </div>
                                </div>
                                <span class="brouser_btn">+54</span>
                            </div>
                            <div class="single_plan d-flex align-items-center justify-content-between">
                                <div class="plan_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset('adminAssets/img/OBJECTS.png')}}" alt="">
                                    </div>
                                    <div>
                                        <h5>Chrome Users</h5>
                                        <span>Today</span>
                                    </div>
                                </div>
                                <span class="brouser_btn">+22</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="main-title">
                            <h3 class="m-0">Visitors by Device</h3>
                            <span>15654 Visaitors</span>
                        </div>
                    </div>
                    <div class="white_card_body ">
                        <div class="card_container">
                            <div id="platform_type_dates_donut" style="height:280px"></div>
                        </div>
                        <div class="devices_btn text-center">
                            <a class="color_button color_button2" href="#">Android</a>
                            <a class="color_button" href="#">iphone</a>
                            <a class="color_button color_button3" href="#">Others</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
