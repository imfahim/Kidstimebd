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

$.getJSON('http://localhost:8000/api/centers', function(data) {
  $.each(data, function(index, element) {
    $('#select-center-name').append($('<option value=' + element.id + '>' + element.name + '</option>'));
  });
});

// ----------------------------------------------------------------------
/*
* End For Getting Data ---------------------------------------------------------------------------------------------------
*/
