<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TextSliderController extends Controller
{
    public function Backend_Slider()
    {
        $slider = DB::table('text_sliders')->get();
        return view('backend.pages.slider.index', compact('slider'));
    }
    public function Add_Slider()
    {

        return view('backend.pages.slider.add_page');
    }

    public function Slider_Store(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        DB::table('text_sliders')->insert($data);
        return redirect()->route('backend.sliders');
    }

    public function Slider_Edit( $id)
    {    $edit = DB::table('text_sliders')->where('id', $id)->first();

        return view('backend.pages.slider.edit_page',compact('edit'));
    }


    public function Slider_Update(Request $request,$id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        DB::table('text_sliders')->where('id',$id)->insert($data);
        return redirect()->route('backend.sliders');
    }

    public function Slider_Delete($id){
        DB::table('text_sliders')->where('id',$id)->delete();
        return redirect()->route('backend.sliders');

    }









}
