@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Images</h3>
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
                                <h4>Images List</h4>
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
                                        <a href="{{route('addImages')}}" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" width="10%">Image</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Type ID</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $k=1; ?>
                                        @foreach($images as $items)

                                        <tr>
                                            <td scope="row">{{$k++}}</td>
                                            <td class=""><img src="{{ asset('uploads')}}/{{$items->image}}" class="img-fluid rounded-circle"></td>
                                            <td>{{$items->type}}</td>
                                            <td>{{$items->type_id}}</td>
                                            <td>
                                                <a type="button" href="{{route('editImages',$items->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fas fa-edit text-primary"></i>
                                                </a>
                                                <a type="button" href="{{route('deleteImages',$items->id)}}" class="item action" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Do you really want to delete this image?');">
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