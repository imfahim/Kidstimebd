@extends('admin.main')

@section('title', 'Edit Center')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Edit Enrollment</h4>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="#">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Enrollment Code</label>
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Course Code</label>
                                        <input type="text" class="form-control" name="Course_id">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Child Name</label>
                                        <input type="text" class="form-control" name="child_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Father Name</label>
                                        <input type="text" class="form-control" name="father_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Mother Name</label>
                                        <input type="text" class="form-control" name="mother_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Date Of Birth</label>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                        <select class="form-control" name="dob_day">
                                          @for ($i = 1; $i < 32; $i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                          @endfor
                                        </select>
                                        </div>
                                        <div class="col-md-2">
                                        <h4>/</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="col-md-8">
                                        <select class="form-control" name="dob_month">
                                          @for ($i = 1; $i < 13; $i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                          @endfor
                                        </select>
                                        </div>
                                        <div class="col-md-2">
                                        <h4>/</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="col-md-8">
                                        <select class="form-control" name="dob_year">
                                          @for ($i = 2018; $i > 2010; $i--)
                                              <option value="{{$i}}">{{$i}}</option>
                                          @endfor
                                        </select>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contact No</label>
                                        <input type="text" class="form-control" name="contact_no">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Transaction No</label>
                                        <input type="text" class="form-control" name="transaction_no">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group label-floating">
                                        <label class="control-label">Status</label>
                                        <select name="status" class="form-control">
                                        </select>

                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
                            <a href="/admin/enrollment" class="btn btn-primary pull-right">Back</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
