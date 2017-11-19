<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
      $centers=DB::table('centers')
                    ->get();

      return view('user.index')->withCenters($centers);
    }

    public function getCourse(Request $request){
      /*$courses=DB::table('courses')
                    ->where('center_id',$request->id);
                    ->get();*/
      return response();
    }
}
