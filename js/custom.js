// Adjust skyline height based on img size
$('#skyline').height($('#skyline img.fill').height());


$(window).on('resize', function (){
  $('#skyline').height($('#skyline img.fill').height());
})
