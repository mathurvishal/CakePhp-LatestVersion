<?php
namespace App\Controller;
use App\Controller\AppController;

/**
 * 
 */
class Test2Controller extends AppController
{
	
	public function index2($arg1='',$arg2='',$arg3='')
	{
		//$this->autoRender=false;
		//echo "My 2nd index2 controller";
		//	echo $arg2;
		print_r($this->request->params["pass"]);
		$this->set('arg1',$arg1);
		$this->set('arg2',$arg2);
		$this->set('arg3',$arg3);


	}
	public function index1()
	{
		///$this->autoRender=false;
		//echo "My 2nd index1 controller";

	}
}


?>