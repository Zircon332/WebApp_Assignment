/* Filename: script.js
Target html: [ what is the html file(s) linked to this js…]                     //needs detailes
Purpose : [ a html file may have multiple js files. What does this one do?…]    //needs detailes
Author: Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie
Date written: 26/4/2019
Revisions:  [ your name, what, when…]                                           //needs detailes
*/



// -----Data Transfer between Web pages----- //

// Store 'subject' as session object
function storeSubject(subject) {
  sessionStorage.subject = subject;
}

// Get the name of the instrument from the product pages and store it
function getSubject(subject) {
  document.location = "enquiry.html";
  storeSubject(subject);
}



// -----Data transfer in the same page----- //

// [ Function description ]







// -----Data validation and input checking of Forms-----  //
function checkSubject() {
  subject = document.getElementById("subject").value;
  let returnText = "";
  if (subject == "")
  {
    returnText += "Please enter a subject.\n";
  }
  return (returnText);
}

function checkFname() {
  name = document.getElementById("fname").value;
  let returnText = "";
  if (name == "")
  {
    returnText += "Please enter your first name.\n";
  }
  if (!name.match(/[a-zA-Z]+/))
  {
    returnText += "Please enter a valid first name.\n";
  }
  if (name.match(/[0-9]+/))
  {
    returnText += "No numbers allowed in names.\n";
  }
  if (name.length > 25)
  {
    returnText += "First name must not be more than 25 characters.\n";
  }

  return (returnText);
}

function checkLname() {
  name = document.getElementById("lname").value;
  let returnText = "";
  if (name == "")
  {
    returnText += "Please enter your last name.\n";
  }
  if (!name.match(/[a-zA-Z]+/))
  {
    returnText += "Please enter a valid last name.\n";
  }
  if (name.match(/[0-9]+/))
  {
    returnText += "No numbers allowed in names.\n";
  }
  if (name.length > 25)
  {
    returnText += "Last name must not be more than 25 characters.\n";
  }

  return (returnText);
}

function checkMail() {
  email = document.getElementById("email").value;
  let returnText = "";
  if (email == "")
  {
    returnText += "Please enter your email address.\n";
  }
  if (!email.match(/@/))
  {
    returnText += "Please enter a valid email address.\n";
  }
  return (returnText);
}

function checkPhone() {
  phone = document.getElementById("phone").value;
  let returnText = "";
  if (phone == "")
  {
    returnText += "Please enter your phone number.\n";
  }
  if (!phone.match(/[0-9]+/))
  {
    returnText += "Please enter a valid phone number.\n";
  }
  if (phone.length > 10)
  {
    returnText += "Phone number must not be longer than 10 characters.\n";
  }
  return (returnText);
}

function checkStreet() {
  street = document.getElementById("street").value;
  let returnText = "";
  if (street == "")
  {
    returnText += "Please enter your street name.\n";
  }
  if (street.length > 40)
  {
    returnText += "Street exceeded the number of 40 characters.\n";
  }
  return (returnText);
}

function checkCity() {
  city = document.getElementById("city").value;
  let returnText = "";
  if (city == "")
  {
    returnText += "Please enter your city name.\n";
  }
  if (city.length > 20)
  {
    returnText += "City exceeded the number of 20 characters.\n";
  }
  return (returnText);
}

function checkState() {
  state = document.getElementById("state").value;
  let returnText = "";
  if (state == "")
  {
    returnText += "Please select a state.\n";
  }
  return (returnText);
}

function checkPC() {
  PC = document.getElementById("postcode").value;
  let returnText = "";
  if (PC == "")
  {
    returnText += "Please enter your postcode.\n";
  }
  if (PC.length > 5)
  {
    returnText += "Postcode cannot exceed 5 characters.\n";
  }
  if (PC.match(/[a-zA-Z]+/))
  {
    returnText += "Please enter a valid postcode.\n";
  }
  return (returnText);
}

function checkProduct() {
  product = document.getElementById("product").value;
  let returnText = "";
  if (product == "")
  {
    returnText += "Please select a product.\n";
  }
  return(returnText);
}

function checkDuration() {
  duration = document.getElementById("duration").value;
  let returnText = "";
  if (duration = "")
  {
    returnText += "Please enter your rental duration.\n";
  }
  if (duration <= 0)
  {
    returnText += "Duration cannot be 0, or less than, 0.\n";
  }
  return(returnText);
}

function checkForm() {
  var alertText = ""
  alertText += checkSubject();
  alertText += checkFname();
  alertText += checkLname();
  alertText += checkMail();
  alertText += checkPhone();
  alertText += checkStreet();
  alertText += checkCity();
  alertText += checkState();
  alertText += checkPC();
  alertText += checkProduct();
  alertText += checkDuration();

  alert(alertText);
}
// [ Function description ]






// -----Populate drop-down list using Javascript----- //

// [ Function description ]
function drop_down() {
  var select = document.getElementById('product');
  var options = ["BTR300", "JP251S", "YSL-354", "YHR-314II", "YEP-202M", "YMP-204MS"];
  // loop to store options in array //
  for (var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement('option');
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
  }
}






// -----init----- //
function init() {
  // test if javascript is in pages
  var clickme = document.getElementById("submit");
  clickme.onclick = checkForm;
  alert("Javascript active");

  drop_down();



  // check which page is open
  currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
  if (currentPage == "enquiry.html") {
    if (sessionStorage.subject != null) { // if sessionStorage has a value (i.e if user came from the product page)
      document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.subject; // place sessionStorage.subject in Subject field in enquiry
      sessionStorage.removeItem("subject"); // remove sessionStorage.subject after it is used
    } else { // if sessionStorage is empty (i.e if user didn't come from the product page)
      document.getElementById("subject").value = "RE: Enquiry on [product name]";
    }
  } else if (currentPage == "index.html") {

  }

}

// function for data transfer within same page
function data_transfer() {
  var s1 = document.getElementById("product").value;
  document.getElementById("subject").innerHTML = "You selected" + s1;
}

window.onload = init;
