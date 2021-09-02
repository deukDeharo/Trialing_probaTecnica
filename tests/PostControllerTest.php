<?php
// use PHPUnit\Framework\TestCase;
// use App\DataBase\DBmanager;
// use App\Controllers\PostController;
// use App\Models\Post;
// use App\Controllers\UserController;
// use App\Models\User;

// class PostControllerTest extends TestCase{

//     protected $user;
//     protected $connection;
//     protected $userController;
//     protected $postController;
//     protected $post;

//     public function setUp() : void
//     {
//         $this->user = new User("userPost_name","userPost_surname","userPost@mail.com");
//         $this->user->setUserID(191);
//         $db = new DBmanager();
//         $this->connection = $db->connect();
//         $this->userController = new UserController();
//         $this->postController = new PostController();
//         $this->post = new Post("Post de prueba");
//         $this->post->setContenido("Lorem ipsum");
//         //DEJAMOS UNA LINEA EN LA BASE DE DATOS USERS CON DATOS DE PRUEBA
//         $this->userController->insertUser($this->user,$this->connection);
//     }

//     public function testInsert(){
//         $this->assertTrue($this->postController->insertPost($this->user,$this->post));
//     }
//     public function testSelectAll(){
//         $this->assertGreaterThanOrEqual(2,count($this->postController->getAllPosts()));
//         // var_dump($this->postController->getAllPosts());
//     }
//     public function testSelectAllfromUser(){
//         var_dump($this->postController->getUserPosts($this->user));
//         $this->assertGreaterThanOrEqual(2,count($this->postController->getUserPosts($this->user)));
//     }
//     public function testDelete(){
//         $this->post->setPostID('41');
//         $this->assertTrue($this->postController->deletePost($this->post));
//     }
    

// }