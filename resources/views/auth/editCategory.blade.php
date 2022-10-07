@extends('layouts.dashboard')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">{{$title}}</h3>
                    </div>
                </div>
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
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <form method="post" action="{{route('editCategory',$item->id)}}" enctype="multipart/form-data">
					                @csrf

					                <div class="form-group">
					                    <label for="catname">Name</label>                 
					                    <input type="text" class="form-control" id="catname" name="catname" placeholder="Enter category name" value="{{$item->name}}">
					                   @error('catname')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
					                <div class="form-group">
					                    <label for="cat-des">Description</label>
					                    <input type="text" class="form-control" id="cat-des" name="cat_des" placeholder="Enter description" value="{{$item->cat_description}}">
                                        @error('cat_des')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="parent-id">Parent</label>
					                    <select id="parent-id" class="form-control" name="parent_id">
					                        <option selected="" disabled="" value="">Choose parent</option>
					                        @foreach($category as $cat)
					                        <option value="{{$cat->id}}" @if($cat->id==$item->parent_id){{'selected'}}@endif>{{$cat->name}}</option>
					                        @endforeach
					                    </select>
                                        @error('parent_id')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
                        
					                <div class="form-group">
					                    <label for="file">Select category image: </label>
					                    <input type="file" name="file" id="file"> 
                                        {{--@foreach($images as $img)
                                             <img src="@if($item->id==$img->type_id){{asset('uploads')}}/{{$img->image}}@endif" class="img-fluid product-img-border ">
                                        @endforeach --}}
                                        <img src="{{asset('uploads')}}/{{$item->file}}">
                                        @error('file')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="text-center">
					                    <button type="submit" class="btn btn-primary px-5">Submit</button>
					                </div>
					            </form>
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