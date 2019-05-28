/* Filename: enhancements.js
Target html: [ what is the html file(s) linked to this js…]                     //needs detailes
Purpose : [ a html file may have multiple js files. What does this one do?…]    //needs detailes
Author: Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie
Date written: 26/4/2019
Revisions:  [ your name, what, when…]                                           //needs detailes
*/


// -----Hightlight navbar that the page is currently in----- //
function navHighlight() {
  // check which page is open
  var currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
  var navBar = document.getElementsByTagName("nav");
  var listLinks = navBar[0].getElementsByTagName("a");

  if (currentPage.match(/product/)) {
    // For the product nav links
    for(var i = 1; i < 5; i++) {            // for 1 to 4
      var matchString = i;

      if (currentPage.match(/_/)) {         // if the page is a subpage
        var matchString = i + "_";          // add "_" in match
      }

      if (currentPage.match(matchString)) {                 // check which page or subpage user is in
        listLinks[i].style.backgroundColor = "#e5bd4e";     // highlight the dropDown nav list
      }
    }
  } else {
    // For three of the nav links (home, enquiry and disclaimer)
    for(var i = 0; i < listLinks.length; i++) {
      target = listLinks[i].href.substring(listLinks[i].href.lastIndexOf("/") + 1)

      if (target == currentPage) {
        listLinks[i].parentElement.style.backgroundColor = "#e5bd4e";
      }
    }
  }
}







// -----Slideshow----- //
var i = 0;

function changeimage(){
  document.getElementById("banner2").style.backgroundImage = "url(styles/image/banner" + (i++ % 6) + ".jpg)";
}
function slider(){
  setInterval(changeimage, 3000);
}




setTimeout(navHighlight, 100);
setTimeout(slider, 1000);


