<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;

class UserController extends Controller
{
    public function profileimage(){
       
         return view('admin.user.profile', array('user'=>Auth::user()));
     }
 
     public function updateprofileimage(Request $request){
         $this->validate($request,[
            //  'title'=>'required',
             'userimage'=>'required|image|mimes:jpg,jpeg,png|max:10000',
         ]);
 
         if ($request->hasFile('userimage')) {
             $userimage=$request->file('userimage');
             $filename=time().'.'.$userimage->getClientOriginalExtension();
             Image::make($userimage)->resize(300,300)->save(public_path('user_images/'.$filename));
 
             $user=Auth::user();
            //  $user->title=$request->title;
             $user->userimage=$filename;
             $user->save();
         }
 
         return view('admin.user.profile', array('user'=>Auth::user()));
}
}
