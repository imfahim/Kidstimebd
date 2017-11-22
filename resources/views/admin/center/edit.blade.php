@extends('admin.main')

@section('title', 'Edit Center')

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
                        <h4 class="title">Edit Center</h4>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('center.update', [$center->id]) }}" data-parsley-validate="">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />
                            <input type="hidden" name="id" value="{{ $center->id }}" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $center->name }}" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ $center->location_heading }}" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Detail address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $center->address }}" required="" maxlength="255">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Manager</label>
                                        <input type="text" class="form-control" name="manager" value="{{ $center->office_manager }}" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Contact No</label>
                                        <input type="text" class="form-control" name="contact" value="{{ $center->office_contact_no }}" maxlength="15" data-parsley-type="digits">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $center->office_email }}" data-parsley-type="email" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Status</label>
                                        <select name="status" class="form-control" required="" data-parsley-type="integer">
                                          <option value="1" {{ ($center->status === 1) ? 'selected' : '' }}>Enable</option>
                                          <option value="0" {{ ($center->status === 0) ? 'selected' : '' }}>Disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
                            <a href="{{ route('center.index') }}" class="btn btn-primary pull-right">Back</a>
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
