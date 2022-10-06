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
                                <form method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
					                @csrf

					                <div class="form-group">
					                    <label for="pname">Product name</label>                 
					                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter product name" value="">
					                    @error('pname')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="category">Category</label>
					                    <select id="category" class="form-control" name="category">
					                        <option selected="" value="" disabled="">Choose category</option>
					                        @foreach($category as $cat)
					                        <option value="{{$cat->id}}">{{$cat->name}}</option>
					                        @endforeach
					                    </select>
					                    @error('category')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="price">Product price</label>
					                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
					                    @error('price')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="offer-price">Offer price</label>
					                    <input type="number" class="form-control" id="offer-price" name="offerprice" placeholder="Enter offer price">
					                    @error('offerprice')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="s_des">Short description</label>
					                    <input type="text" class="form-control" id="s_des" name="s_des" placeholder="Enter short description">
					                    @error('s_des')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="l_des">Long description</label>
					                    <input type="text" class="form-control" id="l_des" name="l_des" placeholder="Enter long description">
					                    @error('l_des')
                                            <div class="small text-danger">{{$message}}</div>
                                        @enderror
					                </div>
					                <div class="form-group">
					                    <label for="status">Status</label>
					                    <select id="status" name="status" class="form-control">
					                        <option value="0">Inactive</option>
					                        <option value="1" selected="">Active</option>
					                    </select>
					                </div>
					                <div class="form-group">
					                    <label for="file">Select product image: </label>
					                    <input type="file" name="file" id="file" class="form-control-file">
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