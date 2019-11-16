<?php
include ('user.php');
$login = isset($_POST['username']) ? $_POST['username'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$phone .= isset($_POST['phone1']) ? $_POST['phone1'] : '';
$phone .= isset($_POST['phone2']) ? $_POST['phone2'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$user = new User();
      $user->name = $login;
      $user->phone = $phone;
	  $user->password = $password;
	  $user->save();
	if ($user->login($login, $password)) 
	{
			session_save_path($_SERVER['DOCUMENT_ROOT'].'/session');
			session_start();
			$_SESSION['islogged'] = 'login';
			$_SESSION['user'] = $login;
			header("Location: cabinet.php");
	}
	else
	{
		header("Location: login.html");
	}
?>