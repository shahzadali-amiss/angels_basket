<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Images;
use App\Models\City;
use App\Models\Order;
use App\Models\Cart;
use App\Models\State;
use App\Models\Customer;
use App\Models\CustomOrder;
use Session;
use Illuminate\Http\Request;

class FrontController extends Controller
{	

	public function deleteExtraImage(){
		$all=glob('uploads/*');
		$imp=Images::select('image')->get()->toArray();

		dd($imp);
	}


	public function index(){
		// $data['popular']=Product::where('status', '1')->limit(4)->get();
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
		$data['popular'] =Product::take(11)->get();               
    	return view('front.welcome', $data);
	}

	public function logout(){
		Session::forget('mobile');
    	return redirect()->route('get-mobile');
	}

	public function about(){
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
    	return view('front.about', $data);
	}
	
	public function services(){
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
    	return view('front.service', $data);
	}
	
	public function products(){
  //   	$data['products'] =Product::join('images', 'products.id', '=', 'images.type_id')
		// ->get(['products.*', 'images.image']);  
		$data['products'] =Product::where('status', true)->get();              
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
		// dd($data);
    	return view('front.products', $data);
	}

	public function gallery(){
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
    	return view('front.gallery', $data);
	}

	public function contact(){
		$data['instagram'] =Images::where('type', 'Instagram')->orderBy('type_id')->get();
    	return view('front.contact', $data);
	}

	public function blogs(){
    	return view('front.blogs');
	}

	public function singleBlog(){
    	return view('front.single-blog');
	}

	public function getMobile(Request $request){
		if(!Session::has('mobile')){
			if($request->isMethod('get')){
				return view('front.get-mobile');
			}else{
				$request->validate([
					'mobile'=>'required|numeric|digits:10',
					// 'password'=>'required|min:8',
				]);
				
				$mobile=Customer::where(['mobile'=>$request->mobile, 'status'=>true])->first();
				if(!$mobile){
					$mobile=new Customer();
					$mobile->mobile=$request->mobile;
					// $mobile->password=$request->password;
					$mobile->status=true;
					if(!$mobile->save()){
						return back()->with('error','Something went wrong! Please try again.');
					}else{

					} 
				}
				Session::put('mobile', $request->mobile);
				return redirect()->route('home');
			}
		}else{
			return redirect()->route('home');
		}
	}
	public function cart(){
		if(Session::has('mobile')){
			$data['carts']=Cart::with('getProduct')->where(['mobile'=>Session::get('mobile'), 'is_in_cart'=>true])->get();
			return view('front.cart', $data);	
		}else{
			return view('front.get-mobile');	
		}
	}

	public function addToCart(Request $request){
        $request->validate([
        	'p_id'=>'required|numeric'
        ]);
        if(Session::has('mobile')){
	        $product=Product::find($request->p_id);
			$cart=Cart::where(['mobile'=>Session::get('mobile'), 'product_id'=>$request->p_id, 'is_in_cart'=>true])->first();
			if($cart){
				$cart->quantity++;
			}else{
				$cart=new Cart();
				$cart->mobile=Session::get('mobile');
				$cart->product_id=$request->p_id;
				$cart->quantity=1;
				$cart->value=$product->offer_price;
				$cart->is_in_cart=1;
			}
			if($cart->save()){
				return back()->with('success','Product added to the cart successfully.');
			}else{
				return back()->with('error','Something went wrong! Please try again.');
			}
        }else{
        	return redirect()->route('get-mobile');
        }
    }

    function checkout(Request $request){
    	if(Session::has('mobile')){
	    	if($request->isMethod('get')){

	    	}else{
	    		$request->validate([
	    			'quantities.*'=>'required'
	    		]);
	    		$carts=Cart::with('getProduct')->where(['mobile'=>Session::get('mobile'),'is_in_cart'=>true])->get();
	    		foreach ($carts as $key => $value) {
	    			$value->quantity=$request->quantities[$key];
	    			$value->save();
	    		}
	    		return redirect()->route('shipping-details');
	    	}
    	}else{
    		return redirect()->route('home');
    	}
    }

    function shippingDetails(Request $request){
    	if(Session::has('mobile')){
	    	if($request->isMethod('get')){
	    		$data['mobile']=Customer::where(['mobile'=>Session::get('mobile'), 'status'=>true])->first();
	    		if(!is_null($data['mobile']->state)){
	    			$data['cities']=City::where(['state_id'=>$data['mobile']->state, 'status'=>true])->get();
	    		}

	    		$data['states']=State::where(['country_id'=>101, 'status'=>true])->get();
	    		return view('front.shipping-details', $data);
	    	}else{
	    		$request->validate([
	    			'name'=>'required',
	    			'state'=>'required',
	    			'city'=>'required',
	    			'house'=>'required',
	    			'area'=>'required',
	    			'landmark'=>'required',
	    			'pincode'=>'required|numeric|digits:6',
	    		]);
	    		
	    		$mobile=Customer::where(['mobile'=>Session::get('mobile'), 'status'=>true])->first();
	    		if($mobile){
	    			$mobile->name=$request->name;
	    			$mobile->state=$request->state;
	    			$mobile->city=$request->city;
	    			$mobile->house=$request->house;
	    			$mobile->area=$request->area;
	    			$mobile->landmark=$request->landmark;
	    			$mobile->pincode=$request->pincode;
	    			$mobile->status=true;
	    			if($mobile->save()){
	    				return redirect()->route('payment-type');
	    			}else{
	    				return back()->with('error','Something went wrong! Please try again.');
	    			}
	    		}
	    	}
    	}else{
    		return redirect()->route('home');
    	}
    }

    function paymentType(Request $request){
    	if(Session::has('mobile')){
	    	if($request->isMethod('get')){
	    		return view('front.payment-type');
	    	}else{	
	    		$request->validate([
	    			'pmt_type'=>'required|in:cash'
	    		]);

	    		if($request->pmt_type=='cash'){
	    			$mobile=Customer::where(['mobile'=>Session::get('mobile'), 'status'=>true])->first();
	    			$carts=Cart::with('getProduct')->where(['mobile'=>Session::get('mobile'), 'is_in_cart'=>true])->get();
	    			if(count($carts)>0){
	    				
	    				$subtotal=0;
	    				
	    				foreach ($carts as $key => $cart) {
	    					$subtotal=$subtotal+$cart->quantity*$cart->getProduct->offer_price;
	    				}	

	    				$delivery_charge=50;
	    				$grandtotal=$subtotal+$delivery_charge;
	    				
	    				$order = new Order();
	    				$order->mobile=Session::get('mobile');
	    				$uniqueid=uniqid('OR',false).rand(11111,99999);
	    				$order->order_id=$uniqueid;
	    				$order->amount=$grandtotal;
	    				$order->name=$mobile->name;
	    				$state=State::find($mobile->state);
	    				$order->state=$state->name;
	    				$city=City::find($mobile->city);
	    				$order->city=$city->name;
	    				$order->house=$mobile->house;
	    				$order->area=$mobile->area;
	    				$order->landmark=$mobile->landmark;
	    				$order->pincode=$mobile->pincode;
	    				$order->order_status='pending';
	    				$order->status=true;
	    				if($order->save()){
							foreach ($carts as $key => $cart) {
		    					$cart->is_in_cart=false;
		    					$cart->order_id=$uniqueid;
		    					$cart->save();
		    				}	    		
		    				$data['order']=Order::find($order->id);
		    				return view('front.order-placed', $data);			
	    				}
	    			}
	    		}

	    	}
    	}else{
    		return redirect()->route('home');
    	}
    }


    public function orders(){
		if(Session::has('mobile')){
			$data['orders']=Order::with('getCarts.getProduct','getCarts.getProductImage')->where(['mobile'=>Session::get('mobile'), 'status'=>true])->get();
    		return view('front.orders', $data);    	
    	}
    }

    public function customOrder(Request $request){
    	// dd($request);
    	$request->validate([
    		'full_name'  => 'required',
    		'mobile'  => 'required |numeric|digits:10',
    		'address'  => 'required',
    		'event'  => 'required',
    		// 'image'  => 'required'
    		]);
    	$custom_order=new CustomOrder();
    	if($request->hasfile('image')){
    		$file = $request->file('image');
    		$extention = $file->getClientOriginalExtension();
    		$file_name = time().'.'.$extention;
    		$file->move('uploads/custom_order',$file_name);
    		$custom_order->image = $file_name;
    	}
    	$custom_order->full_name = $request->full_name;
    	$custom_order->mobile = $request->mobile;
    	$custom_order->address =$request->address;
    	$custom_order->event = $request->event;
    	// dd($custom_order);
    	if($custom_order->save()){
    		return back()->with('success','Your Order Request Send successfully');
    	}
    	else
    		return back()->with('error', 'Something went Wrong !');

    }




}
