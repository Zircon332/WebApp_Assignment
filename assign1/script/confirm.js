"use strict";

function validate() {
  var errMsg = "";
  var result = true;

  if(result){
    alert("Booking Successfully");
  }else{
    alert("Booking Failed");
  }
  return result;
}

function getBooking(){
  // if(sessionStorage.pfirstname != undefined){
    document.getElementById("confirm_fname").textContent = sessionStorage.pfirstname;
    document.getElementById("confirm_lname").textContent = sessionStorage.plastname;
    document.getElementById("confirm_email").textContent = sessionStorage.pemail;
    document.getElementById("confirm_phone").textContent = sessionStorage.pphone;
    document.getElementById("confirm_street").textContent = sessionStorage.pstreet;
    document.getElementById("confirm_city").textContent = sessionStorage.pcity;
    document.getElementById("confirm_state").textContent = sessionStorage.pstate;
    document.getElementById("confirm_postcode").textContent = sessionStorage.ppostcode;
    document.getElementById("confirm_product").textContent = sessionStorage.pproduct;
    document.getElementById("confirm_duration").textContent = sessionStorage.pduration;
    document.getElementById("confirm_comment").textContent = sessionStorage.comment;
  
}

function cancelBooking() {
  window.location = "enquiry.html";
}

function init() {
  getBooking();

  var bookForm = document.getElementById("bookform");
  var cancelBooking = document.getElementById("cancelButton");

  if(bookForm){
    bookForm.onsubmit = validate;
  }else{
    cancelBooking.onclick = cancelBooking();
  }
}

window.onload = init;
