<?php
	if (isset($_POST['g-recaptcha-response'])) $captcha_response = $_POST['g-recaptcha-response'];
	else die('На форме нет капчи! Обратитесь к администратору!');
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$params = [
		'secret' => '6LetvG4jAAAAABmlA6YXWqfgwHAj-qZhL85MOur3',
		'response' => $captcha_response,
		'remoteip' => $_SERVER['REMOTE_ADDR']
	];

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($ch);
	if (!empty($response)) $decoded_response = json_decode($response);

	$success = false;

	if ($decoded_response && $decoded_response->success) {
		$success = $decoded_response->success;
	}

	$result = $success ? 'Капча пройдена успешно!' : 'Неверная капча!';

	if ($result) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "messages";
		
		$conn = new mysqli($servername, $username, $password);
			if ($conn->connect_error) {
				die("Ошибка в подключении: " . $conn->connect_error);
			  }	  
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		$name = strip_tags($_POST["name"]);
		$email = strip_tags($_POST["email"]);
		if(!empty($_POST["homepage"])) $homepage = strip_tags($_POST["homepage"]);
		else $homepage = "";
		$textarea = strip_tags($_POST["textarea"]);
		$IP = $_SERVER['REMOTE_ADDR'];
		$temp = get_browser(null,true);
		$Browser = $_SERVER['HTTP_USER_AGENT'];
		$sql = "INSERT INTO `message`(`name`, `email`, `homepage`, `IP`, `Browser`, `text`) VALUES ('$name','$email','$homepage','$IP','$Browser','$textarea')";
		$conn->query($sql);
		
		header('Location: ../messages');
	}
