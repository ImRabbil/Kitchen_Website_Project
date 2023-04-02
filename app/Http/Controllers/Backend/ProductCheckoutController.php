<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductCheckoutController extends Controller
{
    public function Backend_Checkout()
    {
        $checkout = DB::table('products_checkout')
            ->join('products', 'products_checkout.product_id', 'products.id')
            ->select('products_checkout.*', 'products.title')
            ->latest()->paginate(4);
        return view('backend.pages.checkout.index', compact('checkout'));
    }
    public function Product_Checkout_Delete($id)
    {
        DB::table('products_checkout')->where('id', $id)->delete();
        return redirect()->back();
    }
}
