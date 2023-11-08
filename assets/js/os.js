window.onscroll = function() {skroll()};

function skroll() {
    var element = document.getElementById("navtick");
  if (document.documentElement.scrollTop > 70) {
    element.classList.add("fixed-top");
  } 
  else {
    element.classList.remove("fixed-top");
  } 
}
