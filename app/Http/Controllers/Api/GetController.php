<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Center;

class GetController extends Controller
{
    //
    public function centers(){
      $centers = Center::all();

      return response()->json($centers, 200);
    }
}
