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
      $data['images']=Images::all();
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
          $item=Product::find($id);
          $data['item']=$item;
          $data['title']="Edit product";
          $data['category']=Category::all();
          return view('auth.editProduct', $data);
        }
      }else{
        $request->validate([
          'pname'  => 'required',
          'category'  => 'required',
          'price'  => 'required',
          'status'  => 'required',
          's_des'  => 'required',
          'l_des'  => 'required',
        ]);

        if($id==null){
          $request->validate([
          'file' => 'required|image|max:2048'
          ]);
          $product = new Product;  
        }else{
          $product = Product::find($id); 
          // dd($request->status);
        }
        $product->name=$request->pname;
        $product->l_des=$request->l_des;
        $product->s_des=$request->s_des;
        $product->cat_id=$request->category;
        $product->price=$request->price;
        $product->offer_price=$request->offerprice;
        $product->status=$request->status;

        if($id==null){
          $item = new Images;  
        }
        else{
          $item = Images::where('type_id',$id)->first(); 
        }
        
        if($request->file!=null){
          $file = $this->uploadFile($request->file);
          $item->image = $file;
        }

                
        $item->type = "Product";
        $product->save();

        $item->type_id=$product->id;
    
        if($item->save()){
          return redirect()->route('products')->with('success','Product Save successfully');
        }
      }

    }

    function deleteProduct(Request $request, $id=null)
    {
        if($id>0){

            $item=Product::where('id',$id);
            if($item->delete()){
                return redirect()->route('products')->with('status', 'Product Deleted successfully');    
            }
            else
              return redirect()->route('products')->with('error', 'Product Already Deleted');
        }
    }


    public function category()
    {
        $data['category']=Category::orderBy('id', 'DESC')->get();
        $data['images']=Images::all();
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
        elseif ($request->isMethod('post')) {

          $request->validate([
          'catname'  => 'required',
         ]);

        if($id==null){
          $request->validate([
          'file' => 'required|max:2048',
         ]);
          $category = new Category;  
        }
        else{
          $category = Category::find($id); 
        }
        $category->name=$request->catname;
        $category->cat_description=$request->cat_des;
        $category->parent_id=$request->parent_id;
        
        if($id==null){
          $item = new Images;  
        }
        else{
          $item = Images::where('type_id',$id)->first(); 
        }
        
        if($request->file!=null){
          $file = $this->uploadFile($request->file);
          $item->image = $file;
        }

                
            $item->type = "Category";
            $category->save();

            $item->type_id=$category->id;
        
            if($item->save()){
               return redirect()->route('categories')->with('success', 'Category Save successfully');
          }else{
            return back()->with('error', 'Something went wrong !');
          }
      }

    }
    

    function deleteCategory(Request $request, $id=null)
    {
        if($id>0){
            $item=Category::where('id',$id);
            if($item->delete()){
                return redirect()->route('categories')->with('success', 'Category Deleted successfully');;    
            }else{
                return back()->with('error', 'Category Already Deleted !');
            }
        }
    }

    public function viewImages()
    {
        $data['images']=Images::orderBy('id', 'DESC')->get();
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
          'type_id'  => 'required',
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

            $item=Images::where('id',$id);
            if($item->delete()){
                return redirect()->route('viewImages')->with('success','Image Deleted successfully');    
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
            'mobile'=>'required|numeric|digits:10|unique:mobiles,mobile',
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
        $mobile->is_active=true;
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

}