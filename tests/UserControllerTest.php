<?php
// use PHPUnit\Framework\TestCase;
// use App\DataBase\DBmanager;
// use App\Controllers\UserController;
// use App\Models\User;

// class UserControllerTest extends TestCase{

//     protected $user;
//     protected $user2;
//     protected $connection;
//     protected $userController;

//     public function setUp() : void
//     {
//         $this->user = new User("user_name","user_surname","user@mail.com");
//         $this->user2 = new User("user2_name","user2_surname","user2@mail.com");
//         $db = new DBmanager();
//         $this->connection = $db->connect();
//         $this->userController = new UserController();
//     }

//     public function testInsert(){
        
//         $this->assertTrue($this->userController->insertUser($this->user));
//         $this->assertTrue($this->userController->insertUser($this->user2));
//     }
//     public function testGetAllUsers(){
//         $this->assertGreaterThan(2,count($this->userController->getAllusers()));
//     }
//     public function testDelete(){
//         $this->assertTrue($this->userController->deleteUser($this->user));
//         $this->assertTrue($this->userController->deleteUser($this->user2));
//     }
    

// }