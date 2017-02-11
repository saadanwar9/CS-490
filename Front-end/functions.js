"use strict";

var httpRequest;

document.getElementById("submit").addEventListener("click", function() {
	var ucid = document.getElementById("ucid").value;
	var pass = document.getElementById("pass").value;
	var body = "ucid=" + ucid + "&pass=" + pass;
	httpRequest = new XMLHttpRequest();
	httpRequest.open("POST", "dologin.php");
	httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	httpRequest.send(body);
});

httpRequest.onreadystatechange = function() {
	if (httpRequest.readyState === XMLHttpRequest.DONE) {
		if (httpRequest.status === 200)
			console.log(httpRequest.responseText);
		} else {
			console.log('Error: ' + httpRequest.status);
		}
	}
};

document.attachEvent("onreadystatechange", function() {
	if (document.readyState === "complete") {
		document.detachEvent("onreadystatechange", arguments.callee);
	}
});