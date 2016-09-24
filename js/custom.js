/*
*   SYSTEM CLOCK ******************************************
*/

// Update time
function tick()
{
    var now = new Date();
    var time = formatAMPM(now);
    $(".time").text(time);

    setTimeout('tick',60000);

    return now.getSeconds() * 1000;
}

// Format datetime object
function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}
/*
***********************************************************
*/

/*
*   START MENU ********************************************
*/
function animateMenu() {

  // Determine direction
  if ($(".start-btn").hasClass("active"))
    direction = "down";
  else
    direction = "up";

  // Toggle active class
  $(".start-btn").toggleClass("active");


  // Set css change values
  if (direction == "up") {
    bottomVal = "22px";
    $(".start-menu").css("display", "block");

  }
  else if (direction == "down") {
    bottomVal = "-350px";
    $(".start-menu").css("z-index", 1);
  }

  // Animate the MENU
  $(".start-menu").animate({
    bottom: bottomVal
  }, 500, function() {
    if(direction == "up")
      $(".start-menu").css("z-index", 2);
    else {
      $(".start-menu").css("display", "none");

    }
  });

  // Stop propagation up the DOM
  event.stopPropagation();
}
/*
***********************************************************
*/

/*
*   DIALOG - ERROR ************************************************
*/


/*
***********************************************************
*/

/*
*   DOCUMENT READY ****************************************
*/
$(document).ready(function(){

  // Begin clock
  var offset = tick();
  setInterval('tick()',60000-offset);

  // Set start button click event
  $(".start-btn").click(animateMenu);

  // Set desktop click event
  $("body").click(function(){
    if ($(".start-btn").hasClass("active"))
      animateMenu();
  });

  // Direct based on url anchor
  var hash = window.location.hash;
  $( hash ).dialog("open");
});
/*
***********************************************************
*/
