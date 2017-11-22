@extends('admin.main')

@section('title', 'Show Enrollment')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Show Enrollment</h4>
                        <p class="category">Enrollment Code : ({{ $enrollment->enrollment_id }})</p>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="col-md-12">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Child Name</label>
                                      <p class="lead">
                                        {{ $enrollment->child_name }}
                                      </p>
                                      <p>
                                        <label class="tim-note">Age :</label> {{ $enrollment->age }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Registered Course</label>
                                      <p class="lead">
                                        {{ $enrollment->course->title }} <small>({{ $enrollment->course->course_id }})</small>
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Status</label>
                                      <p class="lead">
                                        {{ ($enrollment->status) ? 'Approved' : 'Pending' }}
                                      </p>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Father's Name</label>
                                      <p class="">
                                        {{ $enrollment->father_name }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Mother's Name</label>
                                      <p class="">
                                        {{ $enrollment->mother_name }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Contact No.</label>
                                      <p class="">
                                        {{ $enrollment->contact_no }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Email</label>
                                      <p class="">
                                        {{ $enrollment->email }}
                                      </p>
                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Address</label>
                                      <p class="">
                                        {{ $enrollment->address }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Transaction No.</label>
                                      <p class="">
                                        {{ $enrollment->transaction_no }}
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Enrolled at</label>
                                      <p class="">
                                        {{ \Carbon\Carbon::parse($enrollment->created_at)->format('d/m/Y - H:i:s a') }}
                                      </p>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <a href="{{ route('enrollment.index') }}" class="btn btn-primary pull-right">Back</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
