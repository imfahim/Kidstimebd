<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title></title>
  </head>
  <body>
    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissable fade in">
        <button type="button" aria-hidden="true" data-dismiss="alert" class="close btn btn-xs">×</button>
        <span><b><i class="material-icons">done</i>  Success - </b> {{ Session::get('success') }}</span>
      </div>
    @endif
    @if (count($errors) > 0)
      <div class="alert alert-danger alert-dismissable fade in">
        <button type="button" aria-hidden="true" data-dismiss="alert" class="close btn btn-xs">×</button>
        <span>
            <b><i class="material-icons">error</i>  Failed - </b> </span>
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
          <center>
      <div class="form-group">
         <label for="sel1">Select Center:</label>
         <select class="form-control" id="select-center-name" onchange="getCourses();" name="center">
           <option value="-1">--select--</option>
         </select>
        </div>
      </center>
      </div>
      </div>
</div>
<!-- foreach course-->
      <div id="courses">
        
      </div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FEA11E">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title">Enrollment</h4></center>
      </div>
      <div class="modal-body">
        <form method="POST" action="/api/enrollments/create">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Name of Child</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div id="course_id"></div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Father's Name</label>
                        <input type="text" class="form-control" name="father_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Mother's Name</label>
                        <input type="text" class="form-control" name="mother_name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">contact No</label>
                        <input type="text" class="form-control" name="contact">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <label class="control-label">E-Mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Transaction No</label>
                        <input type="text" class="form-control" name="trans">
                    </div>
                </div>
            </div>

      </div>
      <div class="modal-footer">

        <button class="btn btn-success pull-right" onclick="showid();">Submit</button>

        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
        <div class="clearfix"></div>
        </form>
      </div>
    </div>

  </div>
</div>





  </body>
</html>


<style>
body {
    background-color: #FFEFAB;
}
.well{
  background-color: #C6E2A5;
}
table{
  border-spacing:0;
}

tr:first-of-type{
  background:lightgray;
  }

td:nth-child(odd){
  font-weight:bold;
}

th,td{
  padding:5px;
}
.list{
  background-color: #26B4D7;
  background-image: url("/assets/img/dots-pattern.png");
  background-repeat: repeat;
  border-radius: 25px;
  margin: 20px;
}
.btn-warning{
  background-color: #FEC20B;
  border-radius: 12px;
}
#courses{
  margin-left: 7.5%;
}

</style>
<script src="{{ asset('js/testing/main.js') }}" type="text/javascript"></script>
