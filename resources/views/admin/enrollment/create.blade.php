@extends('admin.main')

@section('title', 'Create Enrollment')

@section('page-styles')
  <!-- Form Validation Parsley  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/validator/parsley.css') }}" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Create Enrollment</h4>
                        <p class="category">Create new Enrollment</p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('enrollment.store') }}" data-parsley-validate="">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Child Name</label>
                                        <input type="text" class="form-control" name="child_name" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Father Name</label>
                                        <input type="text" class="form-control" name="father_name" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Mother Name</label>
                                        <input type="text" class="form-control" name="mother_name" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Select Course</label>
                                        <select class="form-control" name="course_id" required="">
                                          @foreach($courses as $course)
                                              <option value="{{ $course->id }}">Course : {{ $course->title }} | Center: {{ $course->center->name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Age</label>
                                      <input type="text" class="form-control" name="age" required="" data-parsley-type="number" max="12" min="4">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <input type="text" class="form-control" name="address" required="" maxlength="255">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contact No</label>
                                        <input type="text" class="form-control" name="contact_no">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Transaction No</label>
                                        <input type="text" class="form-control" name="transaction_no">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                            <a href="{{ route('enrollment.index') }}" class="btn btn-primary pull-right">Back</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
	<!-- Form Validation Parsley  -->
	<script src="{{ asset('js/validator/parsley.min.js') }}" type="text/javascript"></script>
@endsection
