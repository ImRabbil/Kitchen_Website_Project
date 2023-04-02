<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    public function Products_View()
    {

        $product = DB::table('products')->get();
        return view('backend.pages.products.view_page', compact('product'));
    }
    public function Add_Products()
    {
        return view('backend.pages.products.add_page');
    }

    public function Product_Store(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(964, 626)->save('image/products/' . $image_one);
            $data['image'] = 'image/products/' . $image_one;
            DB::table('products')->insert($data);

            return redirect()->route('backend.products');
        } else {
            return redirect()->back();
        }
    }

    public function Product_Edit($id)
    {
        $products = DB::table('products')->where('id', $id)->first();
        return view('backend.pages.products.edit_page',compact('products'));
    }

    public function Product_Update(Request $request, $id){
        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        
        $old_image = $request->old_image;
        $image = $request->file('image');
        if($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(964,626)->save('image/products/'.$image_one);
            $data['image']= 'image/products/'.$image_one;
            DB::table('products')->where('id',$id)->update($data);
            unlink($old_image);
           
            return redirect()->route('backend.products');
        }else{
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['price'] = $request->price;
            DB::table('products')->where('id',$id)->update($data);           
            return redirect()->route('backend.products'); 
        }

    }

    public function Product_Delete($id){
        $photo = DB::table('products')->where('id', $id)->first();
        $old_image = $photo->image;
        unlink($old_image);
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('backend.products');

    }









}
