<?php
  class User {
	public $id = "";
    public $name = "";
    public $phone = "";
	public $password = "";
    public function __construct() {
	  $this->id = $id;(isset($data['id'])) ? $data['id'] : "";
      $this->name = $name;
      $this->phone = $phone;
	  $this->password = $password;
    }
    function delete($id) {
		include('database.php');
		unset ($dataBase[$id]);
		file_put_contents("database.db", serialize($dataBase));
           return;
    }
    function save() {
		include('database.php');
		$dataBase[count($dataBase)] = array($this->name => array($this->phone, $this->password));
		file_put_contents("database.db", serialize($dataBase));
      return ;
    }
	function login($login, $password) {
		include('database.php');
		$logged = false;
		foreach ($dataBase as $users)
		{ 
			if (array_key_exists($login, $users))
						{
							$logged = $users[$login][1] === $password;
							return $logged;
						}
		}
      return $logged;
    }
	function getAll() {
		include('database.php');
      return $dataBase;
    }
	function findByID($id) {
		include('database.php');
      return $dataBase[$id];
    }
  }
?>