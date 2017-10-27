@extends('admin.main')

@section('title', 'Edit Center')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Edit Course</h4>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="#">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Course Code</label>
                                          <input type="text" class="form-control" name="code" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Title</label>
                                          <input type="text" class="form-control" name="title" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Details</label>
                                          <input type="text" class="form-control" name="details" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Fee</label>
                                          <input type="text" class="form-control" name="fee" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Time</label>
                                          <input type="text" class="form-control" name="time" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Total Seats</label>
                                          <input type="text" class="form-control" name="total_seats" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Remaining Seats</label>
                                          <input type="text" class="form-control" name="remaining_seats" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Registration Deadline</label>
                                          <input type="text" class="form-control" name="deadline" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Starting Date</label>
                                          <input type="text" class="form-control" name="starting_date" value="">
                                      </div>
                                  </div>
                              <div class="form-group label-floating">
                                        <label class="control-label">Status</label>
                                        <select name="status" class="form-control">
                                        </select>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
                            <a href="/admin/course" class="btn btn-primary pull-right">Back</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
