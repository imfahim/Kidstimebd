<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    //
    public function index()
    {
        $admins = DB::table('users')->get();
        return view('admin.user.index')->with('admins', $admins);
    }

    public function destroy(Request $request)
    {
      DB::table('users')->where('id', '=', $request->id)->delete();

      Session::flash('success', 'Admin has been deleted successfully !');
      return redirect()->route('admin.index');
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        ]);
        DB::table('users')->insert(
                ['name' => $request->input('name'),'email' => $request->input('email'), 'password' => bcrypt($request->input('password'))]
        );
        Session::flash('success', 'Admin Created successfully !');
        return redirect()->route('admin.index');
    }
    public function edit($id)
    {
        $admin = DB::table('users')->where('id',$id)->first();
        return view('admin.user.edit')->with('admin', $admin);
    }
    public function update(Request $request)
    {
      $this->validate($request,[
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        ]);
        DB::table('users')
            ->where('id', $request->input('id'))
            ->update(['password' => bcrypt($request->input('password'))]);

        Session::flash('success', 'Password Changed successfully !');
        return redirect()->route('admin.index');
    }
}
