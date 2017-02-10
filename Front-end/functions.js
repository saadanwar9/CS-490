"use strict";

document.getElementById("submitAjax").addEventListener("click", function(){
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'dologin.php');
	xhr.send(null);
});

xhr.onreadystatechange = function () {
	var DONE = 4;
	var OK = 200;
	if (xhr.readyState === DONE) {
		if (xhr.status === OK)
			console.log(xhr.responseText);
		} else {
			console.log('Error: ' + xhr.status);
		}
	}
};

document.attachEvent("onreadystatechange", function() {
	if (document.readyState === "complete") {
		document.detachEvent("onreadystatechange", arguments.callee);
	}
});