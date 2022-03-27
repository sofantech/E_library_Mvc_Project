<?php
namespace coding\app\controllers;
class UsersController extends Controller{
    public $router;
    

    public  function show(){
        
        $this->view('home');

    }
    public function register(){
        $users=array("ahmed","ali","hadi");
        $this->view('newuser',$users);

    }




}
?>