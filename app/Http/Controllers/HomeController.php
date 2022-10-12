<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Images;
use App\Models\Order;
use App\Models\State;
use App\Models\City;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
use App\Models\CustomOrder;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.home');
    }

    public function product()
    {
      $data['category']=Category::all();
      $data['product']=Product::orderBy('id', 'DESC')->get();
      $data['images']=Images::where('type', 'Product')->get();
      return view('auth.products',$data);
    }

    public function manageProduct(Request $request, $id=null)
    {   
      if($request->isMethod('get')){
        if($id==null){
          $data['title']="Create new product";
          $data['category']=Category::all();
          return view('auth.addProduct', $data); 
        }
        else
        {
          $item=Product::where('id', $id)->with('images')->get()->first();
          $data['item']=$item;
          $data['title']="Edit product";
          $data['category']=Category::all();
          return view('auth.editProduct', $data);
        }
      }else{
        if($id==null){
        $request->validate([
          'pname'  => 'required',
          'category'  => 'required',
          'price'  => 'required',
          'status'  => 'required',
          's_des'  => 'required',
          'l_des'  => 'required',
          'file'  => 'required|image|max:2048'
        ]);
          $product = new Product; 
            if($request->file!=null){
              $file = $this->uploadFile($request->file);
              $product->image = $file;
            }
            $product->name=$request->pname;
            $product->l_des=$request->l_des;
            $product->s_des=$request->s_des;
            $product->cat_id=$request->category;
            $product->price=$request->price;
            $product->offer_price=$request->offerprice;
            $product->status=$request->status;
                
        }else{
          $request->validate([
          'pname'  => 'required',
          'category'  => 'required',
          'price'  => 'required',
          'status'  => 'required',
          's_des'  => 'required',
          'l_des'  => 'required',
          // 'file'  => 'required|image|max:2048'
        ]);
          $product = Product::find($id);
          if($request->file!=null){
              $file = $this->uploadFile($request->file);
              $product->image = $file;
            } 
          // dd($request->all());
          $product->name=$request->pname;
          $product->l_des=$request->l_des;
          $product->s_des=$request->s_des;
          $product->cat_id=$request->category;
          $product->price=$request->price;
          $product->offer_price=$request->offerprice;
          $product->status=$request->status;
        }
    
        if($product->save()){
          return redirect()->route('products')->with('success','Product Save successfully');
        }
      }

    }

    function deleteProduct(Request $request, $id=null)
    {

      if($id!=null && $id!=""){
            $product = Product::find($id);
            if($product!=null){
                if($product->delete()){
                    if(file_exists(public_path("/uploads/".$product->image))){
                        unlink(public_path("/uploads/".$product->image));
                    }
                    return back()->with('status', 'Product Deleted successfully');
                }else{
                    return back()->with('error', 'Something went wrong !');
                }
            }
            else{
                return back()->with('error', 'Product Already Deleted');
            }

        }

    }


    public function category()
    {
        $data['category']=Category::orderBy('id', 'DESC')->get();
        return view('auth.category',$data);
    }

    public function manageCategory(Request $request, $id=null)
    {   
        if($request->isMethod('get')){
            if($id==null){
                $data['title']="Create new category";
                $data['category']=Category::all();
                return view('auth.addCategory', $data); 
            }
            else
            {
                $item=Category::find($id);
                $data['item']=$item;
                $data['title']="Edit category";
                $data['category']=Category::all();
                return view('auth.editCategory', $data);
            }
        }
        elseif($request->isMethod('post')) {

            if($id==null){
              $request->validate([
                'catname'  => 'required',
                'file' => 'required|max:2048',
             ]);
              $category = new Category; 

              if($request->file!=null){
              $file = $this->uploadFile($request->file);
              $category->image = $file;
              } 
              $category->name=$request->catname;
              $category->cat_description=$request->cat_des;
              $category->parent_id=$request->parent_id;
            }
            else{
               $request->validate([
                'catname'  => 'required',
                // 'file'  => 'required|image|max:2048',
               ]);
              $category = Category::find($id); 
              
              // dd($request->all());
              if($request->file!=null){
                  $file = $this->uploadFile($request->file);
                  $category->image = $file;
                } 
              $category->name=$request->catname;
              $category->cat_description=$request->cat_des;
              $category->parent_id=$request->parent_id;
            }
        
            if($category->save()){
               return redirect()->route('categories')->with('success', 'Category Save successfully');
          }else{
            return back()->with('error', 'Something went wrong !');
          }
      }

    }  

    function deleteCategory(Request $request, $id=null)
    {
        if($id!=null && $id!=""){
            $category = Category::find($id);
            if($category!=null){
                if($category->delete()){
                    if(file_exists(public_path("/uploads/".$category->image))){
                        unlink(public_path("/uploads/".$category->image));
                    }
                    return back()->with('status', 'Category Deleted successfully');
                }else{
                    return back()->with('error', 'Something went wrong !');
                }
            }
            else{
                return back()->with('error', 'Category Already Deleted');
            }

        }
    }

    public function viewImages()
    {
        $data['images']=Images::orderBy('id', 'DESC')->where('type', 'Instagram')->get();
        return view('auth.viewimages',$data);
    }

    public function manageImages(Request $request, $id=null)
    {   
        if($request->isMethod('get')){
            if($id==null){
                $data['title']="Upload new image";
                $data['categories']=Category::orderBy('name')->get();
                return view('auth.addImage', $data); 
            }
            else
            {

                $item=Images::find($id);
                $data['item']=$item;
                $data['title']="Update image";
                return view('auth.editImage', $data);
            }
        }
        else
        {

          $request->validate([
          'type'  => 'required',
          // 'type_id'  => 'required',
         ]);
        if($id==null){
          $request->validate([
          'file' => 'required|max:2048',
         ]);
          $image = new Images;  
        }
        else{
          $image = Images::find($id); 
        }
        
        $image->type=$request->type;
        $image->type_id=$request->type_id;
        
        if($request->file!=null){
          $file = $this->uploadFile($request->file);
          $image->image = $file;
        }
            if($image->save()){
               return redirect()->route('viewImages')->with('success','Image Save successfully');
          }
      }

    }
    

    function deleteImages(Request $request, $id=null)
    {
        if($id>0){

            $item=Images::find($id);
            if($item->delete()){
              if(file_exists(public_path("/uploads/".$item->image))){
                        unlink(public_path("/uploads/".$item->image));
                    }
                return redirect()->route('viewImages')->with('success','Image Deleted successfully');    
            }else{
                    return back()->with('error', 'Something went wrong !');
                }
        } 
    }

    public function viewOrders()
    {
        $data['orders']=Order::with('getCarts.getProduct','getCarts.getProductImage')->where(['status'=>true])->get();
        return view('auth.orders',$data);
    }

    public function viewCustomOrders()
    {
      $data['custom_orders']=CustomOrder::where(['status'=> true])->get();
      return view('auth.custom_orders', $data);
    }

    public function deleteOrder($id){
      $order=Order::find($id);
      if($order->delete()){
        return back()->with('success','Order deleted successfully');
      }
      return back()->with('error','Something went wrong! Please try again.');
    }

    public function deleteCustomOrder($id){
      $custom_order=CustomOrder::find($id);
      if($custom_order->delete()){
        return back()->with('success','Order deleted successfully');
      }
      return back()->with('error','Something went wrong! Please try again.');
    }

    public function viewCustomers()
    {
        $data['customers']=Customer::with(['getCity','getState'])->get();
        // dd($data);
        return view('auth.customers',$data);
    }

    public function addCustomer(Request $request, $id=null)
    {
      $is_edit=is_null($id) ? false : true;
      if($request->isMethod('get')){
        
        if($is_edit){
          $data['mobile']=Customer::find($id);
          $data['cities']=City::where(['state_id'=>$data['mobile']->state, 'status'=>true])->get();
        }

        $data['states']=State::where(['country_id'=>101, 'status'=>true])->get();
        return view('auth.addCustomer',$data);
      }else{
        $is_edit=$request->has('customer_id');  
        if($is_edit){
          $request->validate([
            'mobile'=>'required|numeric|digits:10|:mobiles,mobile,'.$request->mobile,
            'name'=>'required',
            'state'=>'required|numeric',
            'city'=>'required|numeric',
            'house'=>'required',
            'area'=>'required',
            'landmark'=>'required',
            'pincode'=>'required|numeric|digits:6',
            'status'=>'required|numeric|in:0,1',
          ]);
          $mobile=Customer::find($request->customer_id);
        }else{
          $request->validate([
            'mobile'=>'required|numeric|digits:10|unique:customers,mobile',
            'name'=>'required',
            'state'=>'required|numeric',
            'city'=>'required|numeric',
            'house'=>'required',
            'area'=>'required',
            'landmark'=>'required',
            'pincode'=>'required|numeric|digits:6',
            'status'=>'required|numeric|in:0,1',
          ]);
          $mobile=new Customer();
        }
        $mobile->mobile=$request->mobile;
        $mobile->name=$request->name;
        $mobile->state=$request->state;
        $mobile->city=$request->city;
        $mobile->house=$request->house;
        $mobile->area=$request->area;
        $mobile->landmark=$request->landmark;
        $mobile->pincode=$request->pincode;
        $mobile->status=$request->status;
        // $mobile->is_active=true;
        if($mobile->save()){
          if($is_edit)
            return redirect()->route('view-customers')->with('success', 'Customer updated successfully');
          else
            return back()->with('success', 'Customer added successfully');
        }
        return back()->with('error','Something went wrong! Please try again.');
      }
    }

    public function deleteCustomer($id){
      $mobile=Customer::find($id);
      if($mobile){
        $mobile->status=false;
        if($mobile->delete()){
          return back()->with('success','Customer deleted successfully');
        }
        return back()->with('error','Something went wrong! Please try again.');
      }
      return back()->with('error','Customer not found.');
    }


    public function productImage(Request $request){
        // dd($request->all());
        $status = 0;
        foreach ($request->image as $img) {
            // $request->validate([
            //         'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            //         'type'  => 'required',
            //     'type_id'  => 'required',
            //     ]);
            $photo = new Images();
            // if ($request->hasfile('image')) {
                $file = $img;
                $extention = $file->getClientOriginalExtension();
                $file_name = rand(10000,50000).time().'.'.$extention;
                $file->move('uploads/',$file_name);
                $photo->image = $file_name;
                $photo->type=$request->type;
                $photo->type_id=$request->type_id;

                if($photo->save())
                    $status += 1;
        }
        if($status>0){
            return back()->with('success', 'Image Added successfully');
        }else{

            return back()->with('error', 'Somthing went wrong !');

        }
    }




}