<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class SettingController extends Controller
{

    public function view_setting() {
        $update = DB::table('settings')->first();
        return view('backend.pages.setting.add_page', compact('update'));
    }
    

    public function update_Setting(Request $request)
    {
        // return $request->all();
        $data = array();
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['linkdin'] = $request->linkdin;
        $data['instagram'] = $request->instagram;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;

        $old_fav = $request->old_fav;
        $fav_icon = $request->fav_icon;
        if ($fav_icon) {
            $image_one = uniqid() . '.' . $fav_icon->getClientOriginalExtension();
            Image::make($fav_icon)->resize(50, 50)->save('image/settings/icon/' . $image_one);
            $data['fav_icon'] = 'image/settings/icon/' . $image_one;
            @unlink($old_fav);
        }

        $old_logo = $request->old_logo;
        $logo = $request->logo;
        if ($logo) {
            $image_one = uniqid() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(250, 70)->save('image/settings/logo/' . $image_one);
            $data['logo'] = 'image/settings/logo/' . $image_one;
            @unlink($old_logo);
        }
        DB::table('settings')->update($data);

        return redirect()->back();

    }




}
