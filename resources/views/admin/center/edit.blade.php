@extends('layouts.sidebar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Edit Center</h4>
                    </div>
                    <div class="card-content">
                        <form>
		                        <input type="hidden" name="centerId" value="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Detail address</label>
                                        <input type="email" class="form-control" name="address"value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Manaer</label>
                                        <input type="text" class="form-control" name="manager"value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Contact No</label>
                                        <input type="text" class="form-control" name="contact" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Office Email</label>
                                        <input type="text" class="form-control" name="contact" value="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Confirm</button>
                            <a href="center/index" class="btn btn-primary pull-right">Back</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
