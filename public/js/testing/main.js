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
    $('#select-center-name').append($('<option value=' + element.id + '>' + element.name + '</option>'));
  });
});


function getCourses(){
  $.getJSON('/api/courses/'+document.getElementById("select-center-name").value, function(data) {
    document.getElementById("courses").innerHTML="";
    $.each(data, function(index, element) {
      $('#courses').append($('<div class="col-md-3 list"><center><table><tr><td>'+element.title+'</tr></td><tr><td>'+element.details+'</tr></td><tr><td>Starting From:'+element.starting_date+'</tr></td><tr><td>Class:'+element.time+'</tr></td><tr><td>Seats:'+element.remaining_seats+'/'+element.total_seats+'</tr></td><tr><td>Fee:'+element.fee+'</tr></td><tr><td>Deadline:'+element.registration_deadline+'</tr></td><tr><td></table></center><button type="button" class="btn btn-md btn-warning col-md-12" data-toggle="modal" data-target="#myModal" onclick="keepCourseId('+element.id+')">Enroll</button></div>'));
    });
  });

}

function keepCourseId(id){
  document.getElementById('course_id').innerHTML='<input type="hidden" name="course_id" value="'+id+'" />'
}

// ----------------------------------------------------------------------
/*
* End For Getting Data ---------------------------------------------------------------------------------------------------
*/
