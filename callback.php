<?php
	$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	$phone .= isset($_POST['phone1']) ? $_POST['phone1'] : '';
	$phone .= isset($_POST['phone2']) ? $_POST['phone2'] : '';
	echo json_encode ('Спасибо за предоставленный номер '.$phone);
?>