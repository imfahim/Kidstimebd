@extends('admin.main')

@section('title', 'Edit Enrollment')

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
                        <h4 class="title">Edit Enrollment</h4>
                        <p class="category">Enrollment Code : ({{ $enrollment->enrollment_id }})</p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('enrollment.update', [$enrollment->id]) }}" data-parsley-validate="">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />
                            <input type="hidden" name="id" value="{{ $enrollment->id }}" />
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Enrolled Course</label>
                                          <select class="form-control" name="course_id" required="">
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}" {{ ($course->id === $enrollment->course->id) ? ' selected="selected"' : '' }}>{{ $course->title }}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Child Name</label>
                                          <input type="text" class="form-control" name="child_name" value="{{ $enrollment->child_name }}" required="" maxlength="100">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Mother's Name</label>
                                          <input type="text" class="form-control" name="mother_name" value="{{ $enrollment->mother_name }}" required="" maxlength="100">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Father's Name</label>
                                          <input type="text" class="form-control" name="father_name" value="{{ $enrollment->father_name }}" required="" maxlength="100">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Age</label>
                                          <input type="text" class="form-control" name="age" value="{{ $enrollment->age }}" required="" data-parsley-type="number" max="12" min="4">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Contact No.</label>
                                          <input type="text" class="form-control" name="contact_no" value="{{ $enrollment->contact_no }}" required="" data-parsley-type="number">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Email</label>
                                          <input type="email" class="form-control" name="email" value="{{ $enrollment->email }}"  required="" maxlength="50">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Address</label>
                                          <input type="text" class="form-control" name="address" value="{{ $enrollment->address }}"  required="" maxlength="255">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Transaction No.</label>
                                          <input type="text" class="form-control" name="transaction_no" value="{{ $enrollment->transaction_no }}" data-parsley-type="alphanum">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Status</label>
                                          <select name="status" class="form-control" required="" data-parsley-type="integer">
                                            <option value="1" {{ ($enrollment->status === 1) ? 'selected' : '' }}>Approved</option>
                                            <option value="0" {{ ($enrollment->status === 0) ? 'selected' : '' }}>Pending</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
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
