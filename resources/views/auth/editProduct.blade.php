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
            <div class="col-12">
                @include('inc.fade-message')
            </div>
            <div class="col-lg-12">
              <div class="white_card card_height_100 mb_30">

            <!-- start tab -->
	            <nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <button class="nav-link active w-50" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Edit Product</button>
						    <button class="nav-link w-50" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Add More Images</button>
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<div class="white_card_body mt-4">
		                <div class="QA_section"> 
		                    <div class="QA_table mb_30">
		                        <!-- table-responsive -->
		                        <form method="post" action="{{route('editProduct',$item->id)}}" enctype="multipart/form-data">
			                @csrf

			                <div class="form-group">
			                    <label for="pname">Product name</label>                 
			                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter product name" value="{{$item->name}}">
			                    @error('pname')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="category">Category</label>
			                    <select id="category" class="form-control" name="category">
			                        <option selected="">Choose category</option>
			                        @foreach($category as $cat)
			                        <option value="{{$cat->id}}" @if($cat->id==$item->cat_id){{'selected'}}@endif>{{$cat->name}}</option>
			                        @endforeach
			                    </select>
													@error('category')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="price">Product price</label>
			                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$item->price}}">
			                    @error('price')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="offer-price">Offer price</label>
			                    <input type="number" class="form-control" id="offer-price" name="offerprice" placeholder="Enter offer price" value="{{$item->offer_price}}">
			                    @error('offerprice')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="s_des">Short description</label>
			                    <input type="text" class="form-control" id="s_des" name="s_des" placeholder="Enter short description"  value="{{$item->s_des}}">
			                    @error('s_des')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="l_des">Long description</label>
			                    <input type="text" class="form-control" id="l_des" name="l_des" placeholder="Enter long description" value="{{$item->l_des}}">
			                    @error('l_des')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="status">Status</label>
			                    <select id="status" name="status" class="form-control">
			                        <option value="0" @if($item->status==0){{'selected'}}@endif>Inactive</option>
			                        <option value="1" @if($item->status==1){{'selected'}}@endif>Active</option>
			                    </select>
			                    @error('status')
                              <div class="small text-danger">{{$message}}</div>
                          @enderror
			                </div>
			                <div class="form-group">
			                    <label for="file">Select product image: </label>
			                    <input type="file" name="file" id="file">
			                		<img src="{{ asset('uploads')}}/{{$item->image}}" class="img-fluid product-img-border d-block" width="90">
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
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						  	<div class="row">
							  	<div class="col-4 mt-4 border">
                    @foreach($item->images as $image)
                     <div class="row text-center" id="{{'image-div-'.$image->id}}">
                      <div class="col-12 justify-content-arround p-3">
                        <img src="{{ asset('uploads')}}/{{$image->image}}" width="150" class="product-img-border" alt="">
                        <button id="delete-button" onclick="deleteImage({{$image->id}})" type="submit" class="btn  btn-sm mx-auto"><i class="fas fa-trash text-danger"></i></button>
                      </div>  
                     </div>
                     @endforeach
                  </div>

                  <div class="col-8 mt-4 border">
                  	<form method="post" action="{{route('productImage')}}" enctype="multipart/form-data">
                  	@csrf 
                  	<input type="hidden" name="type" value="Product">
                  	<input type="hidden" name="type_id" value="{{$item->id}}">
								  	 <div style='padding:14px'>
									        <label for="files">Select multiple files: </label>
									        <input id="files" type="file" name="image[]" multiple/>        
									 	 </div>
									   <div style='padding:14px; margin:auto';>
									  	 <div id="sortableImgThumbnailPreview">								        
									     </div>
									   </div>
									   <div class="text-center">
			                  <button type="submit" class="btn btn-primary px-3 my-3">Upload Images</button>
			                </div>
									  </form> 
								  </div>

							  </div>
						  </div>
						</div>
					<!-- end tab -->
                    
              </div>
            </div>
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
	<style>
		.ui-sortable-placeholder { 
    	  border: 1px dashed black!important; 
        visibility: visible !important;
        background: #eeeeee78 !important;
       }
    .ui-sortable-placeholder * { visibility: hidden; }
        .RearangeBox.dragElemThumbnail{opacity:0.6;}
        .RearangeBox {
            width: 180px;
            height:180px;
            padding:10px 5px;
            cursor: all-scroll;
            /*float: left;*/
            border: 1px solid #9E9E9E;
            font-family: sans-serif;
            display: inline-block;            
            margin: 5px!important;
            text-align: center;
        }

		.IMGthumbnail{
		    max-width:168px;
		    height:160px;
		    margin:auto;
		    background-color: #ececec;
		    padding:2px;
		    border:none;
		}

		.IMGthumbnail img{
		   max-width:100%;
		   max-height:100%;
		}

		.imgThumbContainer{
		    margin:4px;
		    border: solid;
		    display: inline-block;
		    justify-content: center;
		    position: relative;
		    border: 1px solid rgba(0,0,0,0.14);
		   -webkit-box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
		    box-shadow: 0 0 4px 0 rgba(0,0,0,.2);
		}



		.imgThumbContainer > .imgName{
		  text-align:center;
		  padding: 2px 6px;
		  margin-top:4px;
		  font-size:13px;
		  height: 15px;
		  /*overflow: hidden;*/
		}

		.imgThumbContainer > .imgRemoveBtn{
		    position: absolute;
		    color: #e91e63ba;
		    right: 2px;
		    top: 2px;
		    cursor: pointer;
		    display: none;
		}

		.RearangeBox:hover > .imgRemoveBtn{ 
		    display: block;
		}
	</style>
@endpush

@push('scripts')

<script>
	$(function() {
            $("#sortableImgThumbnailPreview").sortable({
             connectWith: ".RearangeBox",
            
                
              start: function( event, ui ) { 
                   $(ui.item).addClass("dragElemThumbnail");
                   ui.placeholder.height(ui.item.height());
           
               },
                stop:function( event, ui ) { 
                   $(ui.item).removeClass("dragElemThumbnail");
               }
            });
            $("#sortableImgThumbnailPreview").disableSelection();
        });

document.getElementById('files').addEventListener('change', handleFileSelect, false);

  function handleFileSelect(evt) {
    
    var files = evt.target.files; 
    var output = document.getElementById("sortableImgThumbnailPreview");
    
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
           var imgThumbnailElem = "<div class='RearangeBox imgThumbContainer'><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>cancel</i><div class='IMGthumbnail' ><img  src='" + e.target.result + "'" + "title='"+ theFile.name + "'/></div><div class='imgName'>"+ theFile.name +"</div></div>";
                    
              output.innerHTML = output.innerHTML + imgThumbnailElem;          
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  function removeThumbnailIMG(elm){
    elm.parentNode.outerHTML='';
  }

</script>
<!-- multiple image script -->
<script>

    let index = ''
  function deleteImage(id){
    index = id;
      if(confirm('Are you sure')){
        console.log('deleting...');
        $.get('/api/delete-image/'+id, callBackFunc);
      }else{
        console.log('canceling...');
      }
  }
  function callBackFunc(data) {
        if(data.status === 200){
          let imageDiv = document.getElementById('image-div-'+index);
          imageDiv.remove();
          let successMessage =  document.getElementById('image-delete-success');
          console.log(successMessage);
          successMessage.classList.remove("d-none");
          document.getElementById('success-message').innerHTML = data.message;
         
        }else{
          // alert("failed..")
          let failedMessage =  document.getElementById('image-delete-failed');
          failedMessage.classList.remove("d-none");
          document.getElementById('failed-message').innerHTML = data.message;
        }
  }
  </script>
@endpush