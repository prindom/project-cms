$(document).ready(function (event) {
  console.log(event);
  tinymce.init({
    selector: '.richedit'
  });
  let time = "";
  let sec = 0, min = 0, hours = 0;
  $oneSecondTimer = setInterval(changeBGColor, 1);

  let page_id = findGetParameter("page_id");

  console.log(page_id);
  let arr = $("div.collapse.navbar-collapse#myNavbar > ul.nav.navbar-nav > li > a");

  //$("div.collapse.navbar-collapse#myNavbar > ul.nav.navbar-nav > li.active").removeClass("active");
  for (let i = 0; i < arr.length; i++) {
    let attr = $(arr[i]).attr('pageID');
    if($(arr[i]).attr('pageID') == page_id) {
      $(arr[i]).parent().addClass("active");
    }
  }

  if (typeof attr !== typeof undefined && attr !== false) {
      console.log(attr);
  }


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

  function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
          tmp = item.split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
}
});
