<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enrollment;
use App\Center;
use Session;

class PostController extends Controller
{
    //
    /*
    public function centers(Request $request){
      $center = new Center;

      $center->center_id = $request->center_id;
      $center->name = $request->name;
      $center->location_heading = $request->location;
      $center->address = $request->address;
      $center->save();

      return response()->json('Successfully Added', 201);
    }
    */

    public function enrollments(Request $request){
      $this->validate($request,[
        'name' => 'required',
        'mother_name' => 'required',
        'father_name' => 'required',
        'age' => 'required|numeric',
        'contact' => 'required',
        'trans' => '',
        ]);

      $enrollments = Enrollment::all(['id']);

      if($enrollments->isEmpty()){
        $enrollment = new Enrollment;

        $enrollment->enrollment_id = 1001;
        $enrollment->course_id = $request->input('course_id');
        $enrollment->child_name = $request->input('name');
        $enrollment->mother_name = $request->input('mother_name');
        $enrollment->father_name = $request->input('father_name');
        $enrollment->age = $request->input('age');
        $enrollment->contact_no = $request->input('contact');
        $enrollment->address = $request->input('address');
        $enrollment->email = $request->input('email');
        $enrollment->transaction_no = $request->input('trans');

        $enrollment->save();
        Session::flash('success', 'Enrolled successfully !');
        return redirect()->route('user.index');
      }

      $enrollment = new Enrollment;

      $ell=Enrollment::orderBy('enrollment_id', 'desc')->first();

      $enrollment->enrollment_id = $ell->enrollment_id + 1;
      $enrollment->course_id = $request->input('course_id');
      $enrollment->child_name = $request->input('name');
      $enrollment->mother_name = $request->input('mother_name');
      $enrollment->father_name = $request->input('father_name');
      $enrollment->age = $request->input('age');
      $enrollment->contact_no = $request->input('contact');
      $enrollment->address = $request->input('address');
      $enrollment->email = $request->input('email');
      $enrollment->transaction_no = $request->input('trans');

      $enrollment->save();
      Session::flash('success', 'Enrolled successfully !');
      return redirect()->route('user.index');
    }
}
