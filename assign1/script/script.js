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
  document.location = "enquiry.php";
  storeSubject(subject);
}

// Insert instrument name in subject field
function displaySubject() {
  if (sessionStorage.subject != null) {                                                    // if sessionStorage has a value (i.e if user came from the product page)
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.subject; // place sessionStorage.subject in Subject field in enquiry
    sessionStorage.removeItem("subject");                                                  // remove sessionStorage.subject after it is used
  } else {                                                                                 // if sessionStorage is empty (i.e if user didn't come from the product page)
    document.getElementById("subject").value = "RE: Enquiry on [product name]";
  }
}



// -----Data transfer in the same page----- //

// function for data transfer within same page
function data_transfer() {
  var s1 = document.getElementById("product").value;
  document.getElementById("subject").value = "RE: Enquiry on " + s1;
}


// -----Data validation and input checking of Forms-----  //
function checkSubject() {
  subject = document.forms["enquiry_form"]["subject"].value;
  let returnText = "";
  if (subject == "")
  {
    returnText += "Please enter a subject.\n";
  }
  return (returnText);
}

function checkFname() {
  name = document.forms["enquiry_form"]["fname"].value;
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
  name = document.forms["enquiry_form"]["lname"].value;
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
  email = document.forms["enquiry_form"]["email"].value;
  let returnText = "";
  if (email == "")
  {
    returnText += "Please enter your email address.\n";
  }
  if (!email.match(/@/))         // regex for "@"
  {
    returnText += "Please enter a valid email address (missing '@').\n";
  }
  if (!email.match(/.com$/))         // regex for ".com" at the end
  {
    returnText += "Please enter a valid email address (missing '.com' at the end).\n";
  }
  return (returnText);
}

function checkPhone() {
  phone = document.forms["enquiry_form"]["phone"].value;
  let returnText = "";
  if (phone == "")
  {
    returnText += "Please enter your phone number.\n";
  }
  if (!phone.match(/^[0-9]+$/))
  {
    returnText += "Phone number must contain numbers only.\n";
  }
  if (phone.length > 10)
  {
    returnText += "Phone number must not be longer than 10 characters.\n";
  }
  return (returnText);
}

function checkStreet() {
  street = document.forms["enquiry_form"]["street"].value;
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
  city = document.forms["enquiry_form"]["city"].value;
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
  state = document.forms["enquiry_form"]["state"].value;
  let returnText = "";
  if (state == "")
  {
    returnText += "Please select a state.\n";
  }
  return (returnText);
}

function checkPC() {
  pc = document.forms["enquiry_form"]["postcode"].value;
  let returnText = "";
  if (pc == "")
  {
    returnText += "Please enter your postcode.\n";
  }
  if (pc.length > 5)
  {
    returnText += "Postcode cannot exceed 5 characters.\n";
  }
  if (pc.match(/[a-zA-Z]+/))
  {
    returnText += "Please enter a valid postcode.\n";
  }
  return (returnText);
}

function checkProduct() {
  product = document.forms["enquiry_form"]["product"].value;
  let returnText = "";
  if (product == "")
  {
    returnText += "Please select a product.\n";
  }
  return(returnText);
}

function checkDuration() {
  duration = document.forms["enquiry_form"]["duration"].value;
  let returnText = "";
  if (duration == "")
  {
    returnText += "Please enter your rental duration.\n";
  }
  if (duration <= 0)
  {
    returnText += "Duration cannot be 0, or less than, 0.\n";
  }
  return(returnText);
}

function storeBooking(pfname, plname, pmail, pphone, pstreet, pcity, pstate, ppc, pproduct, pduration, comment) {
  sessionStorage.pfirstname = pfname;
  sessionStorage.plastname = plname;
  sessionStorage.pemail = pmail;
  sessionStorage.pphone = pphone;
  sessionStorage.pstreet = pstreet;
  sessionStorage.pcity = pcity;
  sessionStorage.pstate = pstate;
  sessionStorage.ppostcode = ppc;
  sessionStorage.pproduct = pproduct;
  sessionStorage.pduration = pduration;
  sessionStorage.comment = comment;

  alert ("Firstname stored: " + sessionStorage.pfirstname);
  alert ("Firstname stored: " + sessionStorage.plastname);
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

  if (alertText == "") {
    var psubject = subject;
	var pfname = document.forms["enquiry_form"]["fname"].value;
	var plname = document.forms["enquiry_form"]["lname"].value;
	var pmail = email;
	var pphone = phone;
	var pstreet = street;
	var pcity = city;
	var pstate = state;
	var ppc = pc;
	var pproduct = product;
	var pduration = duration;
	var comment = document.getElementById('comments').value;
	/*enhancement for pop up data preview integrated into original js code*/
    return confirm('Preview\nSubject: '+psubject+'\nFirst Name: '+pfname+'\nLast Name: '+plname+'\nEmail: '+pmail+'\nPhone: '+pphone+'\nStreet: '+pstreet+
	'\nCity: '+pcity+'\nState: '+pstate+'\nPostal Code: '+ppc+'\nProduct: '+pproduct+'\nDuration: '+pduration+'\nComments: '+comment);

  storeBooking(pfname, plname, pmail, pphone, pstreet, pcity, pstate, ppc, pproduct, pduration, comment)
}
	else{
		alert(alertText);
	}
}

// php storage //
function storeRegister(name, username, password){
  sessionStorage.name = name;
  sessionStorage.username = username;
  sessionStorage.password = password;

  alert(sessionStorage.name);
}



// -----Populate drop-down list using Javascript----- //

// [ Function description ]
function drop_down() {
  var select = document.getElementById('product');
  var options = ["BTR300", "JP251S", "YSL-354", "YHR-314II", "YEP-202M", "YMP-204MS", "FX310AII", "KA-15S", "SV-600", "CC0-550", "SVA-175", "EFL-100", "YCL-200ADII", "YAS-26", "YTS-26", "YCL-650", "YPC-62", "CB-840C", "CMS-All Series Snare", "CT-9000 Series",
  "TP-4300R", "YX-135"];
  // loop to store options in array //
  for (var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement('option');
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
  }
}

function drop_downNav() {
  var select = document.getElementById('productlist');
  var options = ["Brass", "String", "Woodwind", "Percussion"];
  var links = ["product1.php", "product2.php", "product3.php", "product4.php"];
  // loop to store options in array //
  for (var i = 0; i < options.length; i++) {
    var el = document.createElement('a');
    el.textContent = options[i];
    el.setAttribute('href' , links[i]);
    select.appendChild(el);
  }
}

function expand_table() {
  alert("Expand Table");
}

// -----init----- //
function init() {
  drop_downNav();                           // drop down nav

  // check which page is open
  currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);

  if (currentPage == "enquiry.php") {      // if at enquiry.php
    drop_down();                              // input select drop
    displaySubject();                         // Insert instrument name in subject field

    // validate form when submit is pressed
    var clickme = document.getElementById("submit");
    clickme.onclick = checkForm;
  }

  if (currentPage == "register.php"){
    var vName = getElementById("vName");
    var uName = getElementById("uName");
    var uPass = getElementbyId("uPass");
    var clickme = document.getElementById("register");
    clickme.onclick = storeRegister(vName, uName, uPass);

  }
}
window.onload = init;
