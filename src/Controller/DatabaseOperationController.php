<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager; //for databse conectivity
use Cake\ORM\TableRegistry; //for table registry
/**
 * 
 */
class DatabaseOperationController extends AppController

{
	private $connect;
    public $check = "";

    public function initialize()
    {
        
        $this->connect = ConnectionManager::get('MyCustomDB');
        $this->table = TableRegistry::get('users');
        $this->loadModel("Furits");
    }
	 public function index()
    {
    	

    }

    public function selectdata()
    {
        ///$this->autoRender = false;

       // $data = $this->connect->execute("select * from users")->fetchAll(""); //without assoc "took keys 1,2,3"
      //  $data = $this->connect->execute("SELECT * FROM users WHERE user_id = 4 OR user_id= 5")->fetchAll("assoc"); //field name become keys
        //print_r($data);
        //$data = $this->connect->newQuery()->select("*")->from("users")->order(["user_id"=>"desc"])->execute()->fetchAll("assoc"); //using query builder

           // print_r($data);
        /*foreach ($data as $key) {
           echo "Name : ".$key['user_name']." Phone : ".$key['user_phone']."<br>";
        }
*/       //update using table registry 
        //$data = $this->table->get(5); //to get the data of table users
       // $data->user_name  = "Priya Saani"; //update name where user_id is 2
       // $data->user_email = "priyaS2019@gmail.com"; //update email  where user_id is 2
/*
        if($this->table->save($data)){//to save the data

            echo ("succeess") ;

        } 
        else {
            echo "fail";
        }
*/
             //insert using table registry 
        /*$tableIns = $this->table->newEntity();
        $tableIns ['user_name']  = "heena";
        $tableIns ['user_email'] = "heena@g.com";
        $tableIns ['user_phone'] = "00990909";

        $this->table->save($tableIns);
        echo $tableIns->user_id;*/

        //delete data using table registry
        /*$dateDel = $this->table->get(13);
        $this->table->delete($dateDel);*/

    }
    public function insertdata()
	{
        
		
		/*$check = $this->connect->insert("users",[  //insert MYSQL query
			"user_name" => "priya sr",
			"user_phone" => "747432974",
			"user_email" => "emailq@exhjample.com"
 		]);*/

	/*$this->connect->update('users',[ //Update
        "user_name" => "priya math"
    ],[
        "user_id" => 2
    ]);*/
    /*$this->connect->delete("users",[ //delete
        "user_id" => 1
    ]);
    */
    }

    public function insertModel()
    {
        $this->autoRender = False;
        /*$FuritsObj = $this->Furits->newEntity();

        $FuritsObj->name  = "Banana";
        $FuritsObj->info  = "Banana is a furit.";*/
      $FuritsObj = $this->Furits->query();//using query builder
      $FuritsObj2 = $FuritsObj->insert(["name","info"])->values([
        "name" => "lichi",
        "info" => "mango is king"
      ]);

        if($FuritsObj2->execute()){
            echo "success";
        }
        else{
            echo "fail";
        }

    }

    public function getdata()
    {       //get data using model.
        $this->autoRender = False;

        $data = $this->Furits->find()->toArray();
        //print_r($data);
        foreach ($data as $key => $value) {
            echo "Furit Name : ".$value->name." Info : ".$value->info."<br>";
        }
    }
    public function UpdateData()
    {           //update data using model
        
        $this->autoRender = False;
        $id="2";
        $FreshNameValue = "Blueberry";
        /*$data = $this->Furits->get($id); //using entity object
        $data->name = $FreshNameValue;
        
        if ($this->Furits->save($data)) {
            echo "row updated";
        }
        else {
            echo "fail";
        }*/
        $data = $this->Furits->query(); //usig query builder
        $data->update()->set([
            "name" => $FreshNameValue

        ])->where([
            "id" => $id
        ]);

        if ($data->execute()) {
            echo "row updated";
        }
        else {
            echo "fail";
        }
    }

    public function daleteModelData()
    {   //delete data using model
        $this->autoRender = False;
        $id="3";
        /*$data = $this->Furits->get($id); //using oblect
        if ($this->Furits->delete($data)) {
            echo "success";
        }*/
        $data = $this->Furits->query(); //using query builder
        $data->delete()->where(["id"=>$id]);
        if ($data->execute()) {
            echo "success";       
             }
    }


}