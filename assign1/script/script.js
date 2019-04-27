/* Filename: script.js
Target html: [ what is the html file(s) linked to this js…]                     //needs detailes
Purpose : [ a html file may have multiple js files. What does this one do?…]    //needs detailes
Author: Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie
Date written: 26/4/2019
Revisions:  [ your name, what, when…]                                           //needs detailes
*/



// -----Data Transfer between Web pages----- //

// Store 'subject' as session object
function storeSubject (subject) {
    sessionStorage.subject = subject;
}

// Get the name of the instrument from the product pages and store it
function getSubject (subject) {
    document.location = "enquiry.html";
    storeSubject(subject);
}



// -----Data transfer in the same page----- //

// [ Function description ]







// -----Data validation and input checking of Forms-----  //


// [ Function description ]






// -----Populate drop-down list using Javascript----- //

// [ Function description ]
function drop_down() {
	var select = document.getElementById('product');
	var	options = ["BTR300", "JP251S", "YSL-354", "YHR-314II", "YEP-202M", "YMP-204MS"];
	// loop to store options in array //
	for (var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement('option');
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}






// -----init----- //
function init () {
    // test if javascript is in pages
    alert("Javascript active");

	  drop_down();



    // check which page is open
    currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
        if(currentPage == "enquiry.html" ) {
            if (sessionStorage.subject != null) {                                                           // if sessionStorage has a value (i.e if user came from the product page)
                document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.subject;      // place sessionStorage.subject in Subject field in enquiry
                sessionStorage.removeItem("subject");                                                       // remove sessionStorage.subject after it is used
            } else {                                                                                        // if sessionStorage is empty (i.e if user didn't come from the product page)
                document.getElementById("subject").value = "RE: Enquiry on [product name]";
            }
        }
        else if(currentPage  == "index.html") {

        }
}


window.onload = init;
