<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function Contact_Store(Request $request){
          $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        DB::table('contact_us')->insert($data);

       
        return redirect()->back();

    }

    public function Contact_View(){

        $contacts = DB::table('contact_us')->get();
        return view('backend.pages.contact.index',compact('contacts'));
    }

    public function Delete($id){
        DB::table('contact_us')->where('id',$id)->delete();
        return redirect()->back();
    }













}