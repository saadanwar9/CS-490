<?php

	header('Content-Type: application/json');

	# Check Request Method
	if ($_SERVER['REQUEST_METHOD'] != "POST") {
		header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
		header('Allow: POST');
		die(json_encode(["status" => 405, "response" => "Must Use POST"]));
	}

	$ucid = $_POST['ucid'];
	$pass = $_POST['pass'];

	# Check POST Variables
	if (empty($ucid) || empty($pass)) {
		header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
		die(json_encode(["status" => 400, "response" => "Bad Request"]));
	}
	
	$ut = [
		"njit" => [
			"status"   => 200,
			"response" => "Success"
		],
		"db" => [
			"status"   => 403,
			"response" => "Failed"
		]
	];
	
	# echo json_encode($ut);

	$curl = curl_init();
	curl_setopt_array($curl, [
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'https://web.njit.edu/~ks492/searchform.php',
	    CURLOPT_USERAGENT => 'NJIT Auth Front-end',
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => [
	        "ucid" => $ucid,
	        "pass" => $pass
	    ]
	]);
	$resp = curl_exec($curl);
	# var_dump($resp);
	echo json_encode($resp);
	curl_close($curl);

?>