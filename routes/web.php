<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', 'FrontController@deleteExtraImage')->name('test');

Route::get('/', 'FrontController@index')->name('home');

Route::get('/about', 'FrontController@about')->name('about');

Route::get('/service', 'FrontController@services')->name('service');

Route::get('/product', 'FrontController@products')->name('product');

Route::get('/gallery', 'FrontController@gallery')->name('gallery');

Route::get('/contact', 'FrontController@contact')->name('contact');

Route::get('/blog', 'FrontController@blogs')->name('blogs');

Route::get('/blog/singleBlog', 'FrontController@singleBlog')->name('blogDetail');

Route::get('/cart/{id?}', 'FrontController@cart')->name('cart');

Route::post('/addtocart', 'FrontController@addToCart')->name('add-to-cart');

Route::get('/logout', 'FrontController@logout')->name('logout');

Route::get('/back','Controller@back')->name('back');

Route::any('/get-mobile/{id?}','FrontController@getMobile')->name('get-mobile');

Route::any('/checkout','FrontController@checkout')->name('checkout'); 

Route::get('/orders','FrontController@orders')->name('orders'); 

Route::any('/custom_order','FrontController@customOrder')->name('custom_order'); 

Route::any('/shipping-details','FrontController@shippingDetails')->name('shipping-details');

Route::any('/payment-type','FrontController@paymentType')->name('payment-type');



// Route::get('/admin'); 


Auth::routes();
 
Route::get('/admin', 'HomeController@index')->name('admin-home');

Route::get('/admin/products', 'HomeController@product')->name('products');
Route::any('/admin/products/add-product', 'HomeController@manageProduct')->name('addProduct');
Route::any('/admin/products/edit-product/{id}', 'HomeController@manageProduct')->name('editProduct');
Route::any('/admin/product/add-product-images', 'HomeController@productImage')->name('productImage');
Route::any('/admin/products/delete-product/{id}', 'HomeController@deleteProduct')->name('deleteProduct');

Route::get('/admin/categories', 'HomeController@category')->name('categories');
Route::any('/admin/categories/add-category', 'HomeController@manageCategory')->name('addCategory');
Route::any('/admin/categories/edit-category/{id}', 'HomeController@manageCategory')->name('editCategory');
Route::any('/admin/categories/delete-category/{id}', 'HomeController@deleteCategory')->name('deleteCategory');

Route::get('/admin/images', 'HomeController@viewImages')->name('viewImages');
Route::any('/admin/images/add-image', 'HomeController@manageImages')->name('addImages');
Route::any('/admin/images/edit-image/{id}', 'HomeController@manageImages')->name('editImages');
Route::any('/admin/images/delete-image/{id}', 'HomeController@deleteImages')->name('deleteImages');

Route::get('/admin/orders', 'HomeController@viewOrders')->name('viewOrders');
Route::get('/admin/orders/delete-order/{id}', 'HomeController@deleteOrder')->name('delete-order');

Route::get('/admin/custom_orders', 'HomeController@viewCustomOrders')->name('viewCustomOrders');
Route::get('/admin/custom_order/{id}', 'HomeController@deleteCustomOrder')->name('delete_custom_order');

Route::get('/admin/customers', 'HomeController@viewCustomers')->name('view-customers');
Route::get('/admin/customers/delete-customer/{id}', 'HomeController@deleteCustomer')->name('delete-customer');

Route::any('/admin/customers/add-customer/', 'HomeController@addCustomer')->name('add-customer');
Route::any('/admin/customers/edit-customer/{id}', 'HomeController@addCustomer')->name('edit-customer');

