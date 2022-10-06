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
                                <form method="post" action="{{route('editImages',$item->id)}}" enctype="multipart/form-data">
					                @csrf

					                <div class="form-group">
                                        <label for="file">Select image: </label>
                                        <input type="file" name="file" id="file">
                                        @error('file')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select id="type" class="form-control" name="type">
                                            <option selected="" value="" disabled>Choose type</option>
                                            <option @if($item->type=='Product'){{'selected'}}@endif>Product</option>
                                            <option @if($item->type=='Category'){{'selected'}}@endif>Category</option>
                                            <option @if($item->type=='Instagram'){{'selected'}}@endif>Instagram</option>
                                        </select>
                                        @error('type')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type-id">Type ID</label>
                                        <input type="number" class="form-control" id="type-id" name="type_id" placeholder="Enter type id" value="{{$item->type_id}}">
                                        @error('type_id')
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