<?php

	$ucid = $_POST['ucid'];
	$pass = $_POST['pass'];

	if (empty($ucid) || empty($pass)) {
		// throw http error code
	}

	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'https://web.njit.edu/~',
	    CURLOPT_USERAGENT => 'NJIT Auth Front-end',
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => array(
	        "ucid" => $ucid,
	        "pass" => $pass
	    )
	));
	$resp = curl_exec($curl);
	var_dump($resp);
	curl_close($curl);

?>