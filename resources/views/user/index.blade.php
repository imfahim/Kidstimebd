<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' href='{{ asset('css/user/font-awesome.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('css/user/jquery.fancybox.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('css/user/select2.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('css/user/animate.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('css/user/main.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('css/user/shop.css') }}' type='text/css' media='all' />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='{{ asset('js/user/jquery-migrate.min.js') }}'></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>KidsTimeBD | Student Enrollment</title>
  </head>
  <body  class="home page wide wave-style">
    <div class="page">
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
      <!-- top panel -->
        <div class='site_top_panel wave slider'>
            <!-- canvas -->
            <div class='top_half_sin_wrapper'>
                <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
            </div>
            <!-- / canvas -->
            <div class='container'>
                <div class='row_text_search'>
                    <div id='top_panel_text'><a href="tel:017-71588494"><i class="fa fa-phone-square"></i> 017-71588494 </a>;
                        <a href="mailto:kidstimebd@gmail.com"> <i class="fa fa-envelope-o"></i>kidstimebd@gmail.com</a>
                    </div>
                </div>
                <div id='top_panel_links'>

                </div>
                <div class="site_top_panel_toggle"></div>
            </div>
        </div>

        <!-- / top panel -->
      <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-2' style="width: 14px;"></div>
                <main>
             {{-- <!-- section -->
                  <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                      <div class='grid_col grid_col_12'>
                          <div class='ce clearfix'>
                              <div class='cws_callout'>
                                  <div class='content_section'>
                                      <div class='callout_title'>
                                          <div class="bees bees-end"><span></span></div>STILL NOT CONVINCED?</div>
                                      <div class='separate'></div>
                                      <div class='callout_text'>
                                          <p>Want to get more information about our learning center or would like to see it inside, feel free to schedule&nbsp;a tour.
                                              <br /> Come visit us today!</p>
                                      </div>
                                  </div>
                                  <div class='button_section'><a href='#' class='cws_button xlarge'>Schedule a Tour Now<div class='button-shadow'></div></a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- / section --> --}}

                  <div class='benefits_area wave'>
                      <!-- canvas -->
                      <div class='cloud_wrapper'>
                          <canvas class='cloud' data-bg-color='#f9e8b2' data-line-color='#ffffff' data-pattern-src='/assets/img/dots-pattern.png'></canvas>
                      </div>
                      <!-- / canvas -->
                      <div class='container'>
                          <!-- benefits container -->
                          <div class='benefits_container'>
                            <!-- section -->
                           <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                               <div class='grid_col grid_col_12'>
                                   <div class='ce clearfix'>
                                       <div class='cws_callout'>
                                           <div class='content_section'>
                                               <div class='callout_title'>
                                                   <div class="bees bees-end"><span></span></div>SELECT A CENTER:</div>
                                               <div class='separate'></div>
                                               <div class='callout_text'>
                                                 <div class="form-group">
                                                  <select class="form-control" id="select-center-name" onchange="execute();" name="center">
                                                    <option value="none">--select--</option>
                                                  </select>
                                                 </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- / section -->
                          </div>
                          <!-- / benefits container -->
                      </div>
                  </div>

                  <br /><br />
                  <!-- section -->
                    <div id="main-view" class='grid_row clearfix' style='padding-top: 30px;display:none;'>
                        <div class='grid_col grid_col_6'>
                            <!-- about us -->
                            <div class='ce clearfix'>
                                <div>
                                    <h3 class="ce_title">About <span >Our Center</span></h3>
                                    <p>Our centers are designed specially for kids to portrait such an suitable environment for teaching ! </p>
                                    <ul class="checkmarks_style">
                                        <li>Promised Security</li>
                                        <li>Modern Joyful Environment</li>
                                        <li>Playground Space</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / about us -->
                        </div>
                        <div class='grid_col grid_col_6'>
                            <div class='ce clearfix'>
                                <div class="well">
                                  <div id="center_info"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / section -->
                    <!-- divider -->
                    <div id="division-1" class='grid_row clearfix' style="display:none;">
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / divider -->

                    <!-- heading section -->
                      <div id="center-view" class='grid_row clearfix' style='display:none;'>
                          <div class='grid_col grid_col_12'>
                              <div class='ce clearfix'>
                                  <div>
                                      <h3 class="ce_title" style="text-align: center;">Our center provides <span >the following courses</span></h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- / heading section -->
                      <!-- section -->
                      <div class='grid_row clearfix'>
                          <div id="courses"></div>
                      </div>
                      <!-- / section -->
                      <!-- divider -->
                      <div id="division-2" class='grid_row clearfix' style='padding-bottom: 50px;display:none;'>
                          <div class='grid_col grid_col_12'>
                              <div class='ce clearfix'>
                                  <div>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- / divider -->

                  <!-- foreach course-->


                </main>
           </div>
       </div>
       <!-- canvas -->
        <div class="cloud_wrapper">
            <canvas class="white_cloud"></canvas>
        </div>
        <!-- / canvas -->
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




    </div>
  </body>
</html>

<style>
body {
    background-color: #FFEFAB;
}
.well{
  background-color: transparent;
  border: 2px solid #C6E2A5;
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
<script src="{{ asset('js/methods/main.js') }}" type="text/javascript"></script>


<script type='text/javascript' src='{{ asset('js/user/retina_1.3.0.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/modernizr.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/owl.carousel.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/TweenMax.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/jquery.isotope.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/jquery.fancybox.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/select2.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/wow.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/user/jquery.validate.min.js') }}'></script>
<script type='text/javascript' src="{{ asset('js/user/jquery.form.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('js/user/scripts.js') }}'></script>
<script type='text/javascript' src="{{ asset('js/user/jquery.tweet.js') }}"></script>
