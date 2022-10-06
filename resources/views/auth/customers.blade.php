@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Customers</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @include('inc.fade-message')
            </div>
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <!-- <h3 class="m-0">Product List</h3> -->
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Customers List</h4>
                                <div class="box_right d-flex lms_block">
                                    <!-- <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div> -->
                                    <div class="add_button ml-10">
                                        <a href="{{route('add-customer')}}" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" width="10%">Name</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">House</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Landmark</th>
                                            <th scope="col">City</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Pincode</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customers as $key => $customer)

                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <th>{{ $customer->is_active ? ucwords($customer->name):''}}</th>
                                            <th>{{$customer->mobile}}</th>
                                            <th>{{$customer->is_active?$customer->house:''}}</th>
                                            <th>{{$customer->is_active?$customer->area:''}}</th>
                                            <th>{{$customer->is_active?$customer->landmark:''}}</th>
                                            <th>{{$customer->is_active?$customer->getCity->name:''}}</th>
                                            <th>{{$customer->is_active?$customer->getState->name:''}}</th>
                                            <th>{{$customer->is_active?$customer->pincode:''}}</th>
                                            <th>
                                                @if($customer->status)
                                                <span class="text-white bg-success px-2 py-1">Active</span>
                                                @else
                                                <span class="text-white bg-danger px-2 py-1">Not Active</span>
                                                @endif
                                            </th>
                                            <th>
                                                <a type="button" href="{{route('edit-customer', $customer->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fas fa-edit text-primary"></i>
                                                </a>
                                                <a type="button" href="{{route('delete-customer', $customer->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Do you really want to delete this category?');">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>                                           
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>


 
@endsection