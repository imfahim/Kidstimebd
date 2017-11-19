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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
          <center>
      <div class="form-group">
         <label for="sel1">Select Center:</label>
         <form method="POST" action="{{route('user.courses')}}">
         <select class="form-control" id="center" name="center">
           <option value="-1">--select--</option>
           @foreach($centers as $cen)
           <option value="{{$cen->id}}">{{$cen->name}}({{$cen->location_heading}})</option>
           @endforeach
         </select>
        </div>
      </center>
      </div>
      </div>


<!-- foreach course-->
      <div class="row">
        <div class="col-md-3 list">
          Course Name
          <br>details<br><br><br><br><br><br><br>
          <a href="#" class="btn btn-md btn-warning col-md-12">Enroll</a>
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

</style>
<script>
         function getCenter(){
           alert(document.getElementById("center").value);
            $.ajax({
               type:'POST',
               url:'/getCourse',
               data:{id:document.getElementById("center").value},
               success:function(response){
                  alert('paise?');
               }
            });
         }
      </script>
