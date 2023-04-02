<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCheckoutController;
use App\Http\Controllers\Backend\TextSliderController;
use App\Http\Controllers\Fontend\CheckoutController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/user/logout', [HomeController::class, 'logout'])->name('user.logout');

Route::get('/', function () {

    $product = DB::table('products')->get();
    $about = DB::table('about_us')->first();
    $slider = DB::table('text_sliders')->get();
  
    return view('fontend.layouts.home',compact('product','about','slider'));
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.layouts.home');
    })->name('dashboard');
});

//contact route====
Route::post('/store/contact', [ContactController::class, 'Contact_Store'])->name('fontend.contact');
//admin contact route====
Route::get('/backend/contact', [ContactController::class, 'Contact_View'])->name('backend.contact');
Route::get('/backend/contact/delete/{id}', [ContactController::class, 'Delete']);

///about route of backend
Route::get('/backend/about', [AboutController::class, 'About_View'])->name('backend.about');
Route::get('/backend/add/about', [AboutController::class, 'Add_About'])->name('backend.add.about');
Route::post('/backend/store/about', [AboutController::class, 'About_Store'])->name('store.backend.about');
Route::get('/backend/edit/about/{id}', [AboutController::class, 'About_Edit']);
Route::post('/backend/update/about/{id}', [AboutController::class, 'About_Update'])->name('update.backend.about');
Route::get('/backend/delete/about/{id}', [AboutController::class, 'About_Delete']);

/// product route  of backend
Route::get('/backend/products', [ProductController::class, 'Products_View'])->name('backend.products');
Route::get('/backend/add/products', [ProductController::class, 'Add_Products'])->name('backend.add.product');
Route::post('/backend/store/product', [ProductController::class, 'Product_Store'])->name('store.backend.product');
Route::get('/backend/edit/product/{id}', [ProductController::class, 'Product_Edit']);
Route::post('/backend/update/product/{id}', [ProductController::class, 'Product_Update'])->name('update.backend.product');
Route::get('/backend/delete/product/{id}', [ProductController::class, 'Product_Delete']);


// fontend checkout route  here=======
Route::get('/checkout/{id}', [CheckoutController::class, 'Fontend_Checkout'])->name('fontend.checkout');
Route::post('/checkout/store', [CheckoutController::class, 'Fontend_Checkout_Store'])->name('fontend.checkout.store');

//backend checkout route here--------------
Route::get('/checkout', [ProductCheckoutController::class, 'Backend_Checkout'])->name('backend.products.checkout');
Route::get('/backend/delete/product/checkout/{id}', [ProductCheckoutController::class, 'Product_Checkout_Delete']);

//backend sliders route here--------
Route::get('/sliders', [TextSliderController::class, 'Backend_Slider'])->name('backend.sliders');
Route::get('/backend/add/sliders', [TextSliderController::class, 'Add_Slider'])->name('backend.add.slider');
Route::post('/backend/store/sliders', [TextSliderController::class, 'Slider_Store'])->name('store.backend.slider');
