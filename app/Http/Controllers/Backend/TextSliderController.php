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





}
