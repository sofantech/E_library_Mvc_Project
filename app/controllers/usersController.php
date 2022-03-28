<?php
namespace coding\app\controllers;
class UsersController extends Controller{
    public $router;
    

    public  function show(){
        
        $this->view('home');

    }
    public function register(){
       
        $this->view('admin/category/category');

    }
    public function books(){
       
        $this->view('admin/book/book_view');

    }




}
?>