<?php
	$dbServer = 'sql5.freesqldatabase.com'; // Cambiado a tu servidor de base de datos
	$dbUsername = 'sql5731601'; // Cambiado al nombre de usuario proporcionado
	$dbPassword = '3a3UhYZuSE'; // Cambiado a la contraseña proporcionada
	$dbDatabase = 'sql5731601'; // Cambiado al nombre de la base de datos proporcionado

	// Establecer conexión con la base de datos
	$connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbDatabase, 3306);

	// Verificar si la conexión fue exitosa
	if ($connection->connect_error) {
		die("Conexión fallida: " . $connection->connect_error);
	}
	echo "Conexión exitosa";

	// Puedes poner aquí el resto de tu código

	$adminConfig = array(
		'adminUsername' => "admin",
		'adminPassword' => "af359ab8f3da5f33ffa01f6736e8c02d",
		'notifyAdminNewMembers' => "",
		'defaultSignUp' => "1",
		'anonymousGroup' => "anonymous",
		'anonymousMember' => "guest",
		'groupsPerPage' => "10",
		'membersPerPage' => "10",
		'recordsPerPage' => "10",
		'custom1' => "Full Name",
		'custom2' => "Address",
		'custom3' => "City",
		'custom4' => "State",
		'MySQLDateFormat' => "%m/%d/%Y",
		'PHPDateFormat' => "n/j/Y",
		'PHPDateTimeFormat' => "m/d/Y, h:i a",
		'senderName' => "Membership management",
		'senderEmail' => "ronniengoda@gmail.com",
		'approvalSubject' => "Your membership is now approved",
		'approvalMessage' => "Dear member,\n\nYour membership is now approved by the admin. You can log in to your account here:\nhttp://localhost/fantasticschooladmin\n\nRegards,\nAdmin",
		'hide_twitter_feed' => "",
		'maintenance_mode_message' => "<b>Our website is currently down for maintenance</b><br>\r\nWe expect to be back in a couple hours. Thanks for your patience.",
		'mail_function' => "mail",
		'smtp_server' => "",
		'smtp_encryption' => "",
		'smtp_port' => "25",
		'smtp_user' => "",
		'smtp_pass' => ""
	);
?>
