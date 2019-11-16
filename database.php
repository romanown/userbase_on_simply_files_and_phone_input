<?php
	if (file_exists ("database.db"))
	{
		$dataBase = unserialize(file_get_contents ("database.db"));
	}
	else
	{
		$dataBase = array();
	}
?>