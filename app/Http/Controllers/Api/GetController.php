<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Center;
use App\Enrollment;
use App\Course;

class GetController extends Controller
{
    //
    public function centers(){
      $centers = Center::all();

      return response()->json($centers, 200);
    }

    public function center($id)
    {
      $center = Center::find($id);

      return response()->json($center, 200);
    }

    /*
    public function enrollments(Request $request){
      $enrollment = Enrollment::all();

      return response()->json($enrollment, 200);
    }
    */

    public function course($id){
      $courses = Course::where('center_id', $id)->get();
      return response()->json($courses, 200);
    }
}
