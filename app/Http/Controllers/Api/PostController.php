<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enrollment;

class PostController extends Controller
{
    //
    public function centers(Request $request){

    }

    public function enrollments(Request $request){
      $enrollment = new Enrollment;

      $enrollment->enrollment_id = 1001;
      $enrollment->course_id = 1;
      $enrollment->child_name = 'Rafin Mushfiq';
      $enrollment->mother_name = 'mosadw';
      $enrollment->father_name = 'sdawd';
      $enrollment->dob = date('Y-m-d');
      $enrollment->contact_no = '+8801131241';
      $enrollment->address = 'asdadasd';
      $enrollment->email = 'sdad@test.com';
      $enrollment->transaction_no = 'ksdhf2241SAD@!23';
      $enrollment->status = 0;

      $enrollment->save();

      return response()->json('Successfully Added', 201);
    }
}
