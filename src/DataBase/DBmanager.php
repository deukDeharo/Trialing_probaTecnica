<?php 
namespace  App\DataBase;

use Mysqli;

class DBmanager {
    

    private $host ='localhost';
    private $user ='root';
    private $pwd = 'root';
    private $dbName ='trialing';


    public function connect(){
        $connection = mysqli_connect($this->host, $this->user, $this->pwd, $this->dbName);
        if($connection->connect_error){
            die("ERROR IN DB CONNECTION: ". $connection->connect_error);           
            
        }else{
            return $connection;
        }
        
    }
    public function disconnect($connection){
        mysqli_close($connection);
    }

}
