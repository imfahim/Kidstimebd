<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProfileController extends Controller
{
    //
    public function index()
    {
      $id=Auth::user()->id;
        $profile = DB::table('users')->where('id',$id)->first();
        return view('admin.profile.index')->with('profile', $profile);
    }

    public function edit(Request $request)
    {
      $this->validate($request,[
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        ]);

      $id=Auth::user()->id;
      $profile = DB::table('users')->where('id',$id)->first();

      if(Hash::check($request->input('old_password'), $profile->password)){
        DB::table('users')
            ->where('id', $id)
            ->update(['password' => bcrypt($request->input('password'))]);
        Session::flash('success', 'Password Change Successfully');
      }
      else{
        Session::flash('fail', 'Old Password did not match !');

      }
        return view('admin.profile.index')->with('profile', $profile);
    }
}
