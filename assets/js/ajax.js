$(document).ready(function(){
  $.getJSON('ajax.php', null, function(data)
  {
   for(i=0; i < data.length; i++)
   {
    $('#'+i+'').append(data[i]);
   }
  })
});