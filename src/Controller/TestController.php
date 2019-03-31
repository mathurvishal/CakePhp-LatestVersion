<?php

namespace App\Controller;

use App\Controller\Controller;

use Cake\Datasource\ConnectionManager; // for import ConnectionMaanager

/**
 * 
 */
class TestController extends AppController
{
	 public $ConncetToDB; //connecton variable.
	 public function initialize()
	 {
	 	parent::initialize();
	 	$this->viewBuilder()->layout('MyLayout');
	 	$this->set('title','Home Page');
	 	$this->ConncetToDB = ConnectionManager::get('MyCustomDB');
	 }
	 

	public function index()
	{
		//$this->autoRender = false;
		//echo "hello, this is my first cotrolller";


	}

	/*public function insert()
	{
		echo "insert";
		$this->ConncetToDB->insert("users",[  //insert MYSQL query
			"user_name" => "kunal",
			"user_phone" => "74743294",
			"user_email" => "emailq@example.com"
 		]);

	}*/

	/* public function update()
	{
		echo "update";
		$this->ConncetToDB->update("users",[  //update MYSQL query
			"user_name" => "Ron"
		],[
			"user_id" => "3"
		]);
	}*/

/* public function delete()
{
	echo "delete()";
	$this->ConncetToDB->delete("users",[  //delete MYSQL query
			"user_id" => "3"
		]);
} */
}


?>