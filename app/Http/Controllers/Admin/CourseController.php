<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Center;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('center')->get();

        return view('admin.course.index')->with('courses', $courses);
        //return view('test')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
        $courses = Course::all();

        if($courses->isEmpty()){
          $last_course_code = 2001;
          $time_data = [
            'start_time' => '9:30',
            'end_time' => '2:00',
            'day' => [
              'Saturday',
              'Monday',
              'Wednesday'
            ],
          ];

          $course = new Course;

          $course->course_id = $last_course_code;
          $course->center_id = 3;
          $course->title = 'Crafting';
          $course->details = 'Crafting is a innovative way to improve childs thinkings.';
          $course->fee = 2500;
          $course->time = json_encode($time_data, true);
          $course->total_seats = 10;
          $course->remaining_seats = 10;
          $course->registration_deadline = date('Y-m-d H:i:s');
          $course->starting_date = date('Y-m-d H:i:s');
          $course->status = 1;

          $course->save();

          Session::flash('success', 'Course has been added successfully !');
          return redirect()->route('course.index');
        }

        $courses = null;

        $last_entry = Center::orderBy('center_id', 'desc')->first();
        $last_course_code = $last_entry->center_id + 1;

        $time_data = [
          'start_time' => '9:30',
          'end_time' => '2:00',
          'day' => [
            'Saturday',
            'Monday',
            'Wednesday'
          ],
        ];

        $course = new Course;

        $course->course_id = $last_course_code;
        $course->center_id = 3;
        $course->title = 'Crafting';
        $course->details = 'Crafting is a innovative way to improve childs thinkings.';
        $course->fee = 2500;
        $course->time = json_encode($time_data, true);
        $course->total_seats = 10;
        $course->remaining_seats = 10;
        $course->registration_deadline = date('Y-m-d H:i:s');
        $course->starting_date = date('Y-m-d H:i:s');
        $course->status = 1;

        $course->save();

        Session::flash('success', 'Course has been added successfully !');
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::with('center')->find($id);
        $time = json_decode($course->time);

        //dd($course);
        //return view('admin.course.show')->with('course', $course)->with('time', $time);
        return view('test')->with('course', $course)->with('time', $time);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::with('center')->find($id);


        // For filling up the select box with centers names
        $centers = Center::all();
        $centers_array = collect($centers)->pluck("name")->all();

        //return view('admin.course.edit')->with('course', $course)->with('centers_array', $centers_array);
        return view('test')->with('course', $course)->with('centers_array', $centers_array);
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
      $course = Course::find($id);

      $time_data = [
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'day' => [
          $request->days
        ],
      ];

      $course->center_id = $request->center_id;
      $course->title = $request->title;
      $course->details = $request->details;
      $course->fee = $request->fee;
      $course->time = json_encode($time_data, true);
      $course->total_seats = $request->total_seats;
      $course->registration_deadline = $request->deadline;
      $course->starting_date = $request->starting_date;
      $course->status = $request->status;

      $course->save();

      return "Done";
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
        $course = Course::destroy($request->id);

        Session::flash('success', 'The courses  are successfully deleted !');
        return view('admin.course.index');
    }
}
