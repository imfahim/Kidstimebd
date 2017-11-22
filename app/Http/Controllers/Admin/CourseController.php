<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Center;
use Session;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centers = Center::all(['name', 'id']);
        return view('admin.course.create')->with('centers', $centers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = Course::all();

        if($courses->isEmpty()){
          $last_course_code = 2001;

          $time_data = [
            'start_time' => $request->start_time_hour.':'.$request->start_time_min.' '.$request->start_time_pm,
            'end_time' => $request->end_time_hour.':'.$request->end_time_min.' '.$request->end_time_pm,
            'days' => $request->days,
          ];

          $new_start_date = str_replace('/', '-', $request->reg_date);
          $reg_dead_date = Carbon::createFromFormat('d-m-Y', $new_start_date)->format('Y-m-d');

          $new_end_date = str_replace('/', '-', $request->start_date);
          $starting_date = Carbon::createFromFormat('d-m-Y', $new_end_date)->format('Y-m-d');

          $course = new Course;

          $course->course_id = $last_course_code;
          $course->center_id = $request->center_id;
          $course->title = $request->title;
          $course->details = $request->details;
          $course->fee = $request->fee;
          $course->time = json_encode($time_data, true);
          $course->total_seats = $request->total_seats;
          $course->remaining_seats = $request->remaining_seats;
          $course->registration_deadline = $reg_dead_date;
          $course->starting_date = $starting_date;
          $course->status = 1;

          $course->save();

          Session::flash('success', 'Course has been added successfully !');
          return redirect()->route('course.index');
        }

        $courses = null;

        $last_entry = Course::orderBy('course_id', 'desc')->first();
        $last_course_code = $last_entry->course_id + 1;

        $time_data = [
          'start_time' => $request->start_time_hour.':'.$request->start_time_min.' '.$request->start_time_pm,
          'end_time' => $request->end_time_hour.':'.$request->end_time_min.' '.$request->end_time_pm,
          'days' => $request->days,
        ];

        $new_start_date = str_replace('/', '-', $request->reg_date);
        $reg_dead_date = Carbon::createFromFormat('d-m-Y', $new_start_date)->format('Y-m-d');

        $new_end_date = str_replace('/', '-', $request->start_date);
        $starting_date = Carbon::createFromFormat('d-m-Y', $new_end_date)->format('Y-m-d');

        $course = new Course;

        $course->course_id = $last_course_code;
        $course->center_id = $request->center_id;
        $course->title = $request->title;
        $course->details = $request->details;
        $course->fee = $request->fee;
        $course->time = json_encode($time_data, true);
        $course->total_seats = $request->total_seats;
        $course->remaining_seats = $request->remaining_seats;
        $course->registration_deadline = $reg_dead_date;
        $course->starting_date = $starting_date;
        $course->status = 1;

        $course->save();

        Session::flash('success', 'Course has been added successfully !');
        return redirect()->route('course.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::with('center')->find($id);
        $centers = Center::all(['name', 'id']);

        // Times
        $decoded_time = json_decode($course->time);

        $start_time = explode(':', $decoded_time->start_time);
        $start_time_sec = explode(' ', $start_time[1]);
        $end_time = explode(':', $decoded_time->end_time);
        $end_time_sec = explode(' ', $end_time[1]);

        $time = [
          'start_time_hour' => $start_time[0],
          'start_time_min' => $start_time_sec[0],
          'start_time_pm' => $start_time_sec[1],
          'end_time_hour' => $end_time[0],
          'end_time_min' => $end_time_sec[0],
          'end_time_pm' => $end_time_sec[1],
        ];

        // Dates
        $reg_dead_date = Carbon::createFromFormat('Y-m-d', $course->registration_deadline)->format('d-m-Y');
        $starting_date = Carbon::createFromFormat('Y-m-d', $course->starting_date)->format('d-m-Y');

        return view('admin.course.edit')
        ->with('course', $course)
        ->with('centers', $centers)
        ->with('time', $time)
        ->with('days', $decoded_time->days)
        ->with('reg_date', $reg_dead_date)
        ->with('start_date', $starting_date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $course = Course::find($request->id);

      $time_data = [
        'start_time' => $request->start_time_hour.':'.$request->start_time_min.' '.$request->start_time_pm,
        'end_time' => $request->end_time_hour.':'.$request->end_time_min.' '.$request->end_time_pm,
        'days' => $request->days,
      ];

      $new_start_date = str_replace('/', '-', $request->reg_date);
      $reg_dead_date = Carbon::createFromFormat('d-m-Y', $new_start_date)->format('Y-m-d');

      $new_end_date = str_replace('/', '-', $request->start_date);
      $starting_date = Carbon::createFromFormat('d-m-Y', $new_end_date)->format('Y-m-d');

      $course->center_id = $request->center_id;
      $course->title = $request->title;
      $course->details = $request->details;
      $course->fee = $request->fee;
      $course->time = json_encode($time_data, true);
      $course->total_seats = $request->total_seats;
      $course->remaining_seats = $request->remaining_seats;
      $course->registration_deadline = $reg_dead_date;
      $course->starting_date = $starting_date;
      $course->status = $request->status;

      $course->save();

      Session::flash('success', 'Course has been updated successfully !');
      return redirect()->route('course.index');
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
        return redirect()->route('course.index');
    }
}
