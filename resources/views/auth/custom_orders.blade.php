@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Orders</h3>
                    </div>
                </div>
            </div>
            <div class="col-12">
            @include('inc.session-message')
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
                                <h4>Orders List</h4>
                                <!-- <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="QA_table mb_30">
                                <table class="table lms_table_active">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th width="5%">#</th>
                                        <th width="20%">Sample Image</th>
                                        <th width="15%">Event</th>
                                        <th width="10%">Customer Name</th>
                                        <th width="30%">Mobile No</th>
                                        <th width="30%">Address</th>
                                        <th width="15%" style="text-align: center;">Order Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach( $custom_orders as $key => $order )
                                      <tr class="border border-bottom">
                                        <th>{{$key+1}}</th>
                                        <td>
                                          <table cellpadding="10">
                                            <tr>
                                              <td class="py-0" width="80px" height="80px" style="@if($key==0){{'border:none;'}}@endif"><img src="{{asset("uploads/custom_order/$order->image")}}" width="80px" class="rounded-circle">
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                        <td><span class="p-1 bg-light text-dark">{{ $order->event }}</span></td>
                                        <td>{{ ucfirst($order->full_name)}}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td class="text-center">
                                          @if($order->status=='1')
                                            <span class="text-white bg-warning p-2 rounded">Pending</span>
                                          @elseif($order->status=='0')
                                            <span class="text-white bg-success p-2 rounded">Delivered</span>
                                          @else
                                            <span class="text-white bg-danger p-2 rounded">Cancelled</span>
                                          @endif
                                        </td>
                                        <td>
                                            <a type="button" href="{{route('delete_custom_order',$order->id)}}" class="item action" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this order?');" data-placement="top" title="Delete">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                        </td>
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