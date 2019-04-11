<?php

namespace App\Controller;

use App\Controller\Controller;

use Cake\Datasource\ConnectionManager; // for import ConnectionMaanager

use Cake\Validation\Validator;  // for import validator
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

	public function insert()
	{
		echo "insert";
		$this->ConncetToDB->insert("users",[  //insert MYSQL query
			"user_name" => "priya",
			"user_phone" => "747432974",
			"user_email" => "emailq@exhjample.com"
 		]);
	}

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
} 	*/

public function datavalidate()
{	
	$this->autoRender=false;
	$valid = new Validator; //instance

	$data = array('name' => "visl", 'email' => "abc@gg.com", 'age' => "2", 'url' => "http://www.google.pm"); //array to be validate

	$valid
	->requirePresence("name","create","Name field is required")
	->add("name",["length"=> 
[ "rule"=> ["minLength",6],
"message" => "name min length should be > 5"
]])
		//validate email
	->requirePresence("email","create","Email field is required")
	->add("email",
		["email" =>	[
			"rule" => ["email"],
			"message" => "invalid email"
		]])
		//validate numeric
	->requirePresence("age","create","age field is required")
	->numeric('age',"age must be numeric","create")

	//validate url
	->requirePresence("url","create","url feild is required")
	//->allowEmpty("url") //if we want to allow empty
	->notEmpty("url","url is required","create")//if we want to not allow empty
	->url('url',"url is not valid")
	; //validate presence
	$result = $valid->errors($data); //get errors;
	if(!empty($result)){
		print_r($result);
		echo $result['name']['length']; //access messege value
	}
	else{
		echo "Passed";
	}

}

}


?>