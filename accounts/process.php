<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$u_text = filter_var($_POST["user_text"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Inserisci il tuo nome utente.");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Inserisci un'email valida.");
	}
		
	if (empty($u_password)){
		die("Inserisci una password");
	}	
	
	//print output text
	print "Ciao " . $user_name . "! Grazie per esserti registratƏ! ".
	print "Per eseguire il login, torna alla pagina principale.";
	?>
