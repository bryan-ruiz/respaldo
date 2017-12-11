<?php
	if (isset($_POST["name"]) && !empty($_POST["name"])) {
		if (isset($_POST["email"]) && !empty($_POST["email"])) {
			if (isset($_POST["message"]) && !empty($_POST["message"])) {
				$to = "bryanrb95@gmail.com";
				$from = "From ".$_POST["email"];
				$subject = "Consulta de: ".$_POST["name"];
				$message = $_POST["message"];
				$retval = mail($to, $from, $subject, $message);
				echo "correo enviado";
			}
		}
	}
?>