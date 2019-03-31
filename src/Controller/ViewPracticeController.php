<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * 
 */
class ViewPracticeController extends AppController
{
	
	public function ViewPractice()
	{
		//sending single value using set method
		$this->set("fullName","Vishal Mathur");
		$this->set("name","Vishal");
		$this->set("Age",22);

		//array 
		$socials = array('facebook' =>"facebook/vishalmathur.in", "twitter" => "twitter.com/vishalmathur_in");
		//send array using set method.. syntax $this->set("Key_value",$Values); can access with key_value
		$this->set("data",$socials);

		//send array using set method syntax .. $this->set(compact("values"));
		$phones = array('Airtel' =>"+91-81300-70239", "JIO" => "+91-9899-1717-14");
		$this->set(compact("phones"));
	
		

	}
}
?>