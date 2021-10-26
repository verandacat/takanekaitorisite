jQuery( function() {
  var counter = 0;
  $('.item-d1').each(function(){
      counter++;
  });
  $("#kensu").html(counter);
});

$(function() {
  $("#myTable").tablesorter();
    
  });
