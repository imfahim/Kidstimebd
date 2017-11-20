@extends('admin.main')

@section('title', 'Profile')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">Profile</h4>
                </div>
                <div class="card-content">
                    <form method="POST" action="{{route('profile.changepass')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $profile->id }}" />

                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <label class="form-control">{{$profile->name}}</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <label class="form-control">{{$profile->email}}</label>
                                </div>
                            </div>
                          </div>
                            <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Old Password</label>
                                    <input type="password" class="form-control" name="old_password">
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

                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
