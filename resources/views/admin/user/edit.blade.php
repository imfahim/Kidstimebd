@extends('admin.main')

@section('title', 'Edit Center')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Set Password</h4>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('admin.update', [$admin->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />
                            <input type="hidden" name="id" value="{{ $admin->id }}" />

                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <label class="form-control">{{$admin->name}}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <label class="form-control">{{$admin->email}}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
                            <a href="{{ route('admin.index') }}" class="btn btn-primary pull-right">Back</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
