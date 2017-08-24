$(document).ready(function (event) {
  console.log(event);
  let i = 0;
  let time = "";
  let sec = 0, min = 0, hours = 0;
  $oneSecondTimer = setInterval(changeBGColor, 1);

  function displayTime() {
    if(sec >= 60) {
      min++;
      sec = 0;
    }
    if(min >= 60) {
      hours++;
      min = 0;
    }
    console.log("Running for "+ hours+"h "+min+"m "+sec+"s");
    sec++;
  }

  function changeBGColor(r,g,b,a) {
    $("body").css("background-color", "rgba("+r+","+g+","+b+","+a+")");
  }
});
