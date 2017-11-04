@extends('admin.main')

@section('title', 'Create Course')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Create Course</h4>
                        <p class="category">Create new Course</p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('course.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Course Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Center</label>
                                        <select class="form-control" name="center_id">
                                          @foreach($centers as $center)
                                              <option value="{{$center->id}}">{{$center->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fee</label>
                                        <input type="text" class="form-control" name="fee">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Details</label>
                                        <input type="textarea" class="form-control" name="details">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Time</label>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                        <select class="form-control" name="start_time_hour">
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
                                        <select class="form-control" name="start_time_min">
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
                                        <select class="form-control" name="start_time_pm">
                                              <option value="AM">AM</option>
                                              <option value="PM">PM</option>
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
                                        <select class="form-control" name="end_time_hour">
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
                                        <select class="form-control" name="end_time_min">
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
                                        <select class="form-control" name="end_time_pm">
                                              <option value="AM">AM</option>
                                              <option value="PM">PM</option>
                                        </select>
                                      </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Days</label>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Saturday">Saturday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Sunday">Sunday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Monday">Monday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Tuesday">Tuesday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Wednesday">Wednesday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Thursday">Thursday</label>
                                        </div>
                                        <div class="checkbox-inline">
                                         <label><input type="checkbox" name="days[]" value="Friday">Friday</label>
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
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                            <a href="{{ route('course.index') }}" class="btn btn-primary pull-right">Back</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
