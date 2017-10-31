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
                        <form method="POST" action="{{ route('course.update', [$course->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />
                            <input type="hidden" name="id" value="{{ $course->id }}" />
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Course Code</label>
                                          <input type="text" class="form-control" name="code" value="{{ $course->course_id }}">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Title</label>
                                          <input type="text" class="form-control" name="title" value="{{ $course->title}}">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Details</label>
                                          <input type="text" class="form-control" name="details" value="{{ $course->details}}">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Fee</label>
                                          <input type="text" class="form-control" name="fee" value="{{ $course->fee}}">
                                      </div>
                                  </div>
                                  <div class="col-md-5">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Start Time</label>
                                          <div class="col-md-4">
                                            <div class="col-md-8">
                                          <select class="form-control" name="time_hour">
                                            @for ($i = 12; $i > 0; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor

                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                          <h4>:</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                          <select class="form-control" name="time_min">
                                            @for ($i = 0; $i < 61; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                          <h4>:</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                          <select class="form-control" name="time_pm">
                                                <option value="0">AM</option>
                                                <option value="1">PM</option>
                                          </select>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-5">
                                      <div class="form-group label-floating">
                                          <label class="control-label">End Time</label>
                                          <div class="col-md-4">
                                            <div class="col-md-8">
                                          <select class="form-control" name="time_hour">
                                            @for ($i = 12; $i > 0; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor

                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                          <h4>:</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                          <select class="form-control" name="time_min">
                                            @for ($i = 0; $i < 61; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                          <h4>:</h4>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                          <select class="form-control" name="time_pm">
                                                <option value="0">AM</option>
                                                <option value="1">PM</option>
                                          </select>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Day</label>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="1">Saturday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="2">Sunday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="3">Monday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="4">Tuesday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="5">Wednesday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="6">Thursday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" value="7">Friday</label>
                                          </div>
                                  </div>
                                </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Total Seats</label>
                                          <select class="form-control" name="total_seats">
                                            @for ($i = 0; $i < 51; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Remaining Seats</label>
                                          <select class="form-control" name="remaining_seats">
                                            @for ($i = 0; $i < 51; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Registration Deadline</label>
                                          <div class="col-md-4">
                                            <div class="col-md-8">
                                          <select class="form-control" name="reg_dead_day">
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
                                          <select class="form-control" name="reg_dead_month">
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
                                          <select class="form-control" name="reg_dead_year">
                                            @for ($i = 2018; $i > 2010; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                          </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Starting Date</label>
                                          <div class="col-md-4">
                                            <div class="col-md-8">
                                          <select class="form-control" name="start_day">
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
                                          <select class="form-control" name="start_month">
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
                                          <select class="form-control" name="start_year">
                                            @for ($i = 2018; $i > 2010; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                          </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Status</label>
                                          <select name="status" class="form-control">
                                            <option value="1" {{ ($course->status === 1) ? 'selected' : '' }}>Enable</option>
                                            <option value="0" {{ ($course->status === 0) ? 'selected' : '' }}>Disable</option>
                                          </select>
                                      </div>
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
