<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enrollment;
use App\Course;
use Session;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrolls = Enrollment::with('course')->get(['id', 'enrollment_id', 'course_id', 'child_name', 'mother_name', 'father_name', 'contact_no', 'status']);
        return view('admin.enrollment.index')->with('enrolls', $enrolls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $courses = Course::with('center')->get(['title', 'id', 'center_id']);

      //  return view('admin.enrollment.create')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollment = Enrollment::with('course')->find($id);
        return view('admin.enrollment.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrollment = Enrollment::with('course')->find($id);
        $courses = Course::all(['id', 'title']);

        return view('admin.enrollment.edit')->with('enrollment', $enrollment)->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::find($request->id);

        $enrollment->course_id = $request->course_id;
        $enrollment->child_name = $request->child_name;
        $enrollment->mother_name = $request->mother_name;
        $enrollment->father_name = $request->father_name;
        $enrollment->age = $request->age;
        $enrollment->contact_no = $request->contact_no;
        $enrollment->address = $request->address;
        $enrollment->email = $request->email;
        $enrollment->transaction_no = $request->transaction_no;
        $enrollment->status = $request->status;

        $enrollment->save();

        Session::flash('success', 'The enrollment is successfully updated !');
        return redirect()->route('enrollment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      // For deleting multiple rows pass the array of ids
      $enrollment = Enrollment::destroy($request->id);

      Session::flash('success', 'The enrollment is successfully deleted !');
      return redirect()->route('enrollment.index');
    }
}
