@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Products</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                @include('inc.fade-message')
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
                                <h4>Product List</h4>
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
                                        <a href="{{route('addProduct')}}" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" width="10%" id="img-td"></th>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price(in ???)</th>
                                            <th scope="col">Offer Price(in ???)</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $k=1; ?>
                                        @foreach($product as $items)

                                        <tr>
                                            <td scope="row">{{$k++}}</td>
                                            
                                            <td class=""><img src="{{ asset('uploads')}}/{{$items->image}}" class="img-fluid product-img-border ">
                                           
                                            </td>

                                            <td><a href="#" class="question_content">{{$items->id}}</a></td>
                                            <td><a href="#" class="question_content">{{$items->name}}</a></td>
                                            @foreach($category as $cat)
                                            @if($cat->id==$items->cat_id)<td>{{$cat->name}}</td>@endif
                                            @endforeach
                                            <td>{{$items->price}}</td>
                                            <td>{{$items->offer_price}}</td>
                                            <td>
                                            @if($items->status==1)
                                                <a href="#" class="status_btn">{{'Active'}}</a>
                                            @else
                                                <a href="#" class="status_btn bg-danger">{{'Inactive'}}</a>
                                            @endif
                                            </td>
                                            <td>
                                                <a type="button" href="{{route('editProduct',$items->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fas fa-edit text-primary"></i>
                                                </a>
                                                <a type="button" href="{{route('deleteProduct',$items->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Do you really want to delete this product?');">
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