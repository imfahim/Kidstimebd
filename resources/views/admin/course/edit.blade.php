@extends('admin.main')

@section('title', 'Edit Course')

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
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Course Title</label>
                                          <input type="text" class="form-control" name="title" value="{{ $course->title }}">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Center</label>
                                          <select class="form-control" name="center_id">
                                            @foreach($centers as $center)
                                                <option value="{{$center->id}}" {{ ($center->id === $course->center->id) ? ' selected="selected"' : '' }}>{{$center->name}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Fee</label>
                                          <input type="text" class="form-control" name="fee" value="{{ $course->fee}}">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Details</label>
                                          <input type="textarea" class="form-control" name="details" value="{{ $course->details}}">
                                      </div>
                                  </div>
                                  <div class="col-md-5">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Start Time</label>
                                          <div class="col-md-4">
                                            <div class="col-md-8">
                                          <select class="form-control" name="start_time_hour">
                                            @for ($i = 12; $i > 0; $i--)
                                                <option value="{{$i}}" {{ ($i == $time['start_time_hour']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $time['start_time_min']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="AM" {{ ('AM' == $time['start_time_pm']) ? ' selected="selected"' : '' }}>AM</option>
                                                <option value="PM" {{ ('PM' == $time['start_time_pm']) ? ' selected="selected"' : '' }}>PM</option>
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
                                                <option value="{{$i}}" {{ ($i == $time['end_time_hour']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $time['end_time_min']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                            <option value="AM" {{ ('AM' == $time['end_time_pm']) ? ' selected="selected"' : '' }}>AM</option>
                                            <option value="PM" {{ ('PM' == $time['end_time_pm']) ? ' selected="selected"' : '' }}>PM</option>
                                          </select>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Days</label>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Saturday" {{ (in_array('Saturday', $days)) ? 'checked' : '' }}>Saturday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Sunday" {{ (in_array('Sunday', $days)) ? 'checked' : '' }}>Sunday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Monday" {{ (in_array('Monday', $days)) ? 'checked' : '' }}>Monday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Tuesday" {{ (in_array('Tuesday', $days)) ? 'checked' : '' }}>Tuesday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Wednesday" {{ (in_array('Wednesday', $days)) ? 'checked' : '' }}>Wednesday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Thursday" {{ (in_array('Thursday', $days)) ? 'checked' : '' }}>Thursday</label>
                                          </div>
                                          <div class="checkbox-inline">
                                           <label><input type="checkbox" name="days[]" value="Friday" {{ (in_array('Friday', $days)) ? 'checked' : '' }}>Friday</label>
                                          </div>
                                      </div>
                                    </div>
                                  <div class="col-md-6">
                                      <div class="form-group label-floating">
                                          <label class="control-label">Total Seats</label>
                                          <select class="form-control" name="total_seats">
                                            @for ($i = 0; $i < 51; $i++)
                                                <option value="{{$i}}" {{ ($i == $course->total_seats) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['reg_dead_day']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['reg_dead_month']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['reg_dead_year']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['start_date_day']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['start_date_month']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                                                <option value="{{$i}}" {{ ($i == $dates['start_date_year']) ? ' selected="selected"' : '' }}>{{$i}}</option>
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
                            <a href="{{ route('course.index') }}" class="btn btn-primary pull-right">Back</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
