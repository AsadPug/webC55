<?php
	session_start();

	function execute() {
		$email = !empty($_SESSION["email"]) ? $_SESSION["email"] : null;
		$connectionError = false;
		
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] == "test@test.com" &&
				$_POST["motDePasse"] == "test") {
				$email = $_POST["courriel"];

				$_SESSION["email"] = $email;		
			}
			else {
				$connectionError = true;
			}
		}
		
		return compact("email", "connectionError");
	}