<?php
session_start();
 if(isset($_SESSION['user'])){ ?>
	<html lang="ru" >
 <head>
 <meta charset=utf-8>
      <title>Личный кабинет</title>
 </head>
	 <body>
	<?php echo 'Hello '.$_SESSION['user']; ?>
	<p>Другие пользователи</p>
	<?php include ('user.php');
	$user = new User();
	$allusers = $user->getAll();
      foreach($allusers as $users)
	  {
		  foreach($users as $login => $datas)
	  {
		  	  echo 'login '.$login.' phone '.$datas[0].' password '.$datas[1].'<br>';
	  }
	  }
	?>
	</body>
	 </html>
<?php }
	else
	{
		header("Location: login.html");
	}
?>