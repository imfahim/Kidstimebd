@extends('admin.main')

@section('title', 'Create Course')

@section('page-styles')
  <!-- Form Validation Parsley  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/validator/parsley.css') }}" />

  <!-- Include Bootstrap Datepicker -->
  <link rel="stylesheet" href="{{ asset('css/datepicker/datepicker.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/datepicker/datepicker3.min.css') }}" />
@endsection

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
                        <form method="POST" action="{{ route('course.store') }}" data-parsley-validate="">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Course Title</label>
                                        <input type="text" class="form-control" name="title" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Center</label>
                                        <select class="form-control" name="center_id" required="">
                                          @foreach($centers as $center)
                                              <option value="{{$center->id}}">{{$center->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fee</label>
                                        <input type="text" class="form-control" name="fee" data-parsley-type="number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Details</label>
                                        <textarea class="form-control" name="details" required="" maxlength="500"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Time</label>
                                        <div class="col-md-4">
                                          <div class="col-md-8">
                                        <select class="form-control" name="start_time_hour" required="" data-parsley-type="number" max="12" min="1">
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
                                        <select class="form-control" name="start_time_min" required="" data-parsley-type="number" max="60" min="0">
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
                                        <select class="form-control" name="start_time_pm" required="">
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
                                        <select class="form-control" name="end_time_hour" required="" data-parsley-type="number" max="12" min="1">
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
                                        <select class="form-control" name="end_time_min" required="" data-parsley-type="number" max="60" min="0">
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
                                        <select class="form-control" name="end_time_pm" required="">
                                              <option value="AM">AM</option>
                                              <option value="PM">PM</option>
                                        </select>
                                      </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
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
                                        <select class="form-control" name="total_seats" required="" data-parsley-type="number" max="50" min="0">
                                          @for ($i = 0; $i < 51; $i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                          @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Remaining Seats</label>
                                        <select class="form-control" name="remaining_seats" data-parsley-type="number" max="50" min="0">
                                          @for ($i = 0; $i < 51; $i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                          @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Registration Deadline</label>
                                        <div class="col-xs-5 date">
                                            <div class="input-group input-append date" id="reg_dateRangePicker">
                                                <input type="text" class="form-control" name="reg_date" value="" />
                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Starting Date</label>
                                        <div class="col-xs-5 date">
                                            <div class="input-group input-append date" id="start_dateRangePicker">
                                                <input type="text" class="form-control" name="start_date" value="" />
                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
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

@section('page-scripts')
	<!-- Form Validation Parsley  -->
	<script src="{{ asset('js/validator/parsley.min.js') }}" type="text/javascript"></script>

  <!-- Include Bootstrap Datepicker -->
  <script src="{{ asset('js/datepicker/bootstrap-datepicker.min.js') }}"></script>

  <script>
  $(document).ready(function() {
      $('#reg_dateRangePicker')
          .datepicker({
              format: 'dd/mm/yyyy',
              startDate: '01/01/2010',
              endDate: '30/12/2020'
          })
          .on('changeDate', function(e) {
              // Revalidate the date field
              $('#dateRangeForm').formValidation('revalidateField', 'date');
          });
      $('#start_dateRangePicker')
          .datepicker({
              format: 'dd/mm/yyyy',
              startDate: '01/01/2010',
              endDate: '30/12/2020'
          })
          .on('changeDate', function(e) {
              // Revalidate the date field
              $('#dateRangeForm').formValidation('revalidateField', 'date');
          });
  });
  </script>
@endsection
