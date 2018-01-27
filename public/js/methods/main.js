/*
* For Getting Data ---------------------------------------------------------------------------------------------------
*/

// Eivabe get korte paros
// -------------------------------------------------------------------
/*
$(document).ready(function () {
  $.ajax({
      type: 'GET',
      url: 'http://localhost:8000/api/centers',
      success: function (data) {
        $.each(data, function(index, element) {
          $('#select-center-name').append($('<option value=' + element.id + '>' + element.name + '</option>'));
        });
      },
      error: function (data) {
          alert("Error:" + data);
      }
  });


});
*/
// ----------------------------------------------------------------------


// or eivabe get korte paros
// -----------------------------------------------------------------------


$.getJSON('/api/centers', function(data) {
  $.each(data, function(index, element) {
    $('#select-center-name').append($('<option value=' + element.id + '>' + element.name + ' (' + element.location_heading + ') ' + '</option>'));
  });
});


// function getCourses(){
//   $.getJSON('/api/courses/'+document.getElementById("select-center-name").value, function(data) {
//     document.getElementById("courses").innerHTML="";
//     $.each(data, function(index, element) {
//       $('#courses').append($('<div class="col-md-3 list"><center><table><tr><td>'+element.title+'</tr></td><tr><td>'+element.details+'</tr></td><tr><td>Starting From:'+element.starting_date+'</tr></td><tr><td>Class:'+element.time+'</tr></td><tr><td>Seats:'+element.remaining_seats+'/'+element.total_seats+'</tr></td><tr><td>Fee:'+element.fee+'</tr></td><tr><td>Deadline:'+element.registration_deadline+'</tr></td><tr><td></table></center><button type="button" class="btn btn-md btn-warning col-md-12" data-toggle="modal" data-target="#myModal" onclick="keepCourseId('+element.id+')">Enroll</button></div>'));
//     });
//   });
//
// }

function getCourses(){
  $.getJSON('/api/courses/'+document.getElementById("select-center-name").value, function(data) {
    document.getElementById("courses").innerHTML="";
    var class_time = '';
    $.each(data, function(index, element) {
      class_time = JSON.parse(element.time);
      $('#courses').append($('<div class="grid_col grid_col_4"><div class="ce clearfix"><div class="cws_callout"><div class="content_section"><div class="callout_title"><div class="bees bees-end"><span></span></div>'+element.title+'</div><div class="separate"></div><div class="callout_text"><p>'+element.details+'</p><p>Starting From:'+element.starting_date+'</p><p>Class:'+class_time.start_time+' To '+ class_time.end_time +'</p><p>'+ $.each(class_time.days, function(index, element){
        var container = $('<p></p>');
        container.append('|'+ element +'|');

        return container.html();
      })  +'</p><p>Seats:'+element.remaining_seats+'/'+element.total_seats+'</p><p>Fee:'+element.fee+'</p><p>Deadline:'+element.registration_deadline+'</p></div></div><div class="button_section"><a href="#" class="cws_button xlarge" data-toggle="modal" data-target="#myModal" onclick="keepCourseId('+element.id+')">Enroll<div class="button-shadow"></div></a></div></div></div></div>'));
    });
  });
}

function getCenterInfo() {
  $.getJSON('/api/centers/'+document.getElementById("select-center-name").value, function(data) {
    document.getElementById("center_info").innerHTML="";
    $('#center_info').append($('<div class="ce clearfix"><h3 class="ce_title">'+data.name+'</h3><div><div class="cws_fa_tbl"><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell size_1x"><div class="cws_fa_wrapper"><i class="cws_fa fa fa-1x fa-location-arrow"></i><span class="ring"></span></div></div><div  class="cws_fa_tbl_cell"><h2>Address:</h2></div></div><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell"></div>' + '<div class="cws_fa_tbl_cell"><p>'+data.address+'<br></p></div></div></div><h4>Office Manager : <strong>'+ data.office_manager +'</strong></h4><div class="cws_fa_tbl"><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell size_1x"><div class="cws_fa_wrapper"><i class="cws_fa fa fa-1x fa-phone"></i><span class="ring"></span></div></div><div class="cws_fa_tbl_cell"><h2>Phones:</h2></div></div><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell"></div><div class="cws_fa_tbl_cell"><p><a href="tel:'+data.office_contact_no+'">'+data.office_contact_no+'</a><br></p></div></div></div><div class="cws_fa_tbl"><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell size_1x"><div class="cws_fa_wrapper"><i class="cws_fa fa fa-1x fa-envelope"></i><span class="ring"></span></div></div><div class="cws_fa_tbl_cell"><h2>E-mail:</h2></div></div><div class="cws_fa_tbl_row"><div class="cws_fa_tbl_cell"></div>  <div class="cws_fa_tbl_cell"><p><a href="mailto:'+data.office_email+'"> '+data.office_email+'</a><br></p></div></div></div></div></div>'));
  });
}

function keepCourseId(id){
  document.getElementById('course_id').innerHTML='<input type="hidden" name="course_id" value="'+id+'" />';
}

function execute() {
  $('#main-view').css('display', '');
  $('#center-view').css('display', '');
  $('#division-1').css('display', '');
  $('#division-2').css('display', '');

  var center_id = $('#select-center-name').value;
  if(center_id == 'none'){
    $('#main-view').css('display', 'none');
    $('#center-view').css('display', 'none');
  }else{
    getCenterInfo();
    getCourses();
  }
}


// ----------------------------------------------------------------------
/*
* End For Getting Data ---------------------------------------------------------------------------------------------------
*/
