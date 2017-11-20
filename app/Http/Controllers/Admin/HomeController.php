<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Center;
use App\Course;
use App\Enrollment;
use App\User;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter_centers = $this->track_centers();
        $counter_courses = $this->track_courses();
        $counter_enrollments = $this->track_enrollments();
        $counter_admins = $this->track_admins();

        return view('admin.dashboard')
            ->with('centers_count', $counter_centers)
            ->with('courses_count', $counter_courses)
            ->with('enrollments_count', $counter_enrollments)
            ->with('admins_count', $counter_admins);
    }

    private function track_centers(){
      $centers = Center::all(['id']);

      if($centers->isEmpty()){
        return 0;
      }

      $count_centers = count($centers);
      return $count_centers;
    }

    private function track_courses(){
      $courses = Course::all(['id']);

      if($courses->isEmpty()){
        return 0;
      }

      $count_courses = count($courses);
      return $count_courses;
    }

    private function track_enrollments(){
      $enrollments = Enrollment::all(['id']);

      if($enrollments->isEmpty()){
        return 0;
      }

      $count_enrollments = count($enrollments);
      return $count_enrollments;
    }

    private function track_admins(){
      $admins = User::all(['id']);

      if($admins->isEmpty()){
        return 0;
      }

      $count_admins = count($admins);
      return $count_admins;
    }
}
