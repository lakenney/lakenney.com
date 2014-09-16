
// handle the form submit event
function prepareEventHandlers() {
	document.getElementById("contact").onsubmit = function() {
		// prevent a form from submitting if no email.
		if (document.getElementById("email").value == "") {
			document.getElementById("error").innerHTML = "Please provide an email address!";
			// to STOP the form from submitting
			return false;
		} else {
			// reset and allow the form to submit
			document.getElementById("error").innerHTML = "";
			return true;
		}
	};
}

// when the document loads
window.onload =  function() {
	prepareEventHandlers();
};
