<?php
include ('user.php');
$login = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$user = new User();
	if ($user->login($login, $password)) 
	{
			session_save_path($_SERVER['DOCUMENT_ROOT'].'/session');
			session_start();
			$_SESSION['islogged'] = 'login';
			$_SESSION['user'] = $login;
			header("Location: cabinet.php");
	}
	else
		header("Location: login.html");
?>