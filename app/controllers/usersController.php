<?php
namespace coding\app\controllers;

use coding\app\models\User;
use coding\app\system\DataBase;

class UsersController extends Controller{
    public $router;
    

    public  function createuser(){
        
        $user=new User();
        $user->name="hadi";
        $user->email="hadi@gmail.com";
        $user->password=md5("12345");
        $user->is_active=1;
        $user->role_id=1;
        $user->save();

    }
    public  function show(){
        
        $this->view('website/home');

    }
    public  function showalluser(){
        $data=DataBase::table('users')->select()->all();
        print_r($data);
        
        $this->view('home');

    }
    public function add_user(){
       
        $this->view('admin/users/add_user');

    }
    public function all_user(){
       
        $this->view('admin/users/all_users');

    }

    public function add_book(){
       
        $this->view('admin/book/add_book');

    }
    public function all_books(){
       
        $this->view('admin/book/all_books');

    }

    public function add_category(){
       
        $this->view('admin/category/add_category');

    }
    public function all_categories(){
       
        $this->view('admin/category/all_category');

    }

    public function add_author(){
       
        $this->view('admin/authors/add_author');

    }
    public function all_author(){
       
        $this->view('admin/authors/all_author');

    }

    public function add_publisher(){
       
        $this->view('admin/publisher/add_publisher');

    }
    public function all_publisher(){
       
        $this->view('admin/publisher/all_publisher');

    }
    public function new_user(){
       
        $this->view('website/home');

    }

    public function save_user(){
       $u=new User();
       $u->create($_POST);

        $this->view('website/home');

    }


    public function author(){
       
        $this->view('admin/authors/add_author');

    }
    public function books(){
       
        $this->view('admin/book/book_view');

    }
    public function payment(){
       
        $this->view('admin/payment/add_payment_method');

    }
    public function orders(){
       
        $this->view('admin/orders/all_orders');

    }
    public function publisher(){
       
        $this->view('admin/publisher/all_publishers');

    }




}
?>