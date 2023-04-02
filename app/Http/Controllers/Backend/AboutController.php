<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class AboutController extends Controller
{
    public function About_View()
    {
        $about = DB::table('about_us')->get();
        return view('backend.pages.about.index', compact('about'));
    }
    public function Add_About()
    {

        return view('backend.pages.about.add_page');
    }

    public function About_Store(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;



        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(388, 388)->save('image/about/' . $image_one);
            $data['image'] = 'image/about/' . $image_one;
            DB::table('about_us')->insert($data);

            return redirect()->route('backend.about');
        } else {
            return redirect()->back();
        }
    }


    public function About_Edit($id)
    {
        $about = DB::table('about_us')->where('id', $id)->first();
        return view('backend.pages.about.edit_page', compact('about'));
    }

    public function About_Update(Request $request, $id)
    {

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $old_image = $request->old_image;
        $image = $request->file('image');
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(388, 388)->save('image/about/' . $image_one);
            $data['image'] = 'image/about/' . $image_one;
            DB::table('about_us')->where('id', $id)->update($data);
            unlink($old_image);

            return redirect()->route('backend.about');
        } else {
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            DB::table('about_us')->where('id', $id)->update($data);
            return redirect()->route('backend.about');
        }
    }


    public function About_Delete($id)
    {
        $photo = DB::table('about_us')->where('id', $id)->first();
        $image = $photo->image;
        unlink($image);
        DB::table('about_us')->where('id', $id)->delete();
        return redirect()->route('backend.about');
    }
}
