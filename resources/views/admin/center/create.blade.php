@extends('admin.main')

@section('title', 'Create Center')

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
                        <h4 class="title">Create Center</h4>
                        <p class="category">Create new Center</p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('center.store') }}" data-parsley-validate="">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location" required="" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Detail address</label>
                                        <input type="text" class="form-control" name="address" required="" maxlength="255">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Manager</label>
                                        <input type="text" class="form-control" name="manager" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Contact No</label>
                                        <input type="text" class="form-control" name="contact" maxlength="15" data-parsley-type="digits">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Email</label>
                                        <input type="email" class="form-control" name="email" data-parsley-type="email" maxlength="50">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
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
