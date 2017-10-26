<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Center;
use Session;

class CenterController extends Controller
{




    // On constructor we need to check Auth Middleware
    // --------------------------------------------------






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = Center::all();
        return view('admin.center.index')->with('centers', $centers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.center.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validation

      // -----------------------
      $centers = Center::all();

      if($centers->isEmpty()){
        $last_center_code = 3001;

        $center = new Center;

        $center->center_id = $last_center_code;
        $center->name = $request->name;
        $center->location_heading = $request->location;
        $center->address = $request->address;
        $center->office_manager = $request->manager;
        $center->office_contact_no = $request->contact;
        $center->office_email = $request->email;

        $center->save();

        Session::flash('success', 'Center has been added successfully !');
        return redirect()->route('center.index');
      }

      $centers = null;

      $last_entry = Center::orderBy('center_id', 'desc')->first();
      $last_center_code = $last_entry->center_id + 1;

      $center = new Center;

      $center->center_id = $last_center_code;
      $center->name = $request->name;
      $center->location_heading = $request->location;
      $center->address = $request->address;
      $center->office_manager = $request->manager;
      $center->office_contact_no = $request->contact;
      $center->office_email = $request->email;

      $center->save();

      Session::flash('success', 'Center has been added successfully !');
      return redirect()->route('center.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      Session::flash('fail', 'The Requested page is not available !');
      return redirect()->route('center.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $center = Center::find($id);
        return view('admin.center.edit')->with('center', $center);
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
      $center = Center::find($request->id);

      $center->name = $request->name;
      $center->location_heading = $request->location;
      $center->address = $request->address;
      $center->office_manager = $request->manager;
      $center->office_contact_no = $request->contact;
      $center->office_email = $request->email;
      $center->status = $request->status;

      $center->save();

      Session::flash('success', 'Center has been updated successfully !');
      return redirect()->route('center.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $center = Center::find($request->id);

      $center->delete();

      Session::flash('success', 'Center has been deleted successfully !');
      return redirect()->route('center.index');
    }
}
