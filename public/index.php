<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
include '../app/system/init.php';

$system=new AppSystem;


Router::get('/adduser',[UsersController::class,'add_user']);
Router::get('/allusers',[UsersController::class,'all_user']);

Router::get('/addbook',[UsersController::class,'add_book']);
Router::get('/allbooks',[UsersController::class,'all_books']);

Router::get('/addcategory',[UsersController::class,'add_category']);
Router::get('/allcategories',[UsersController::class,'all_categories']);

Router::get('/addauthor',[UsersController::class,'add_author']);
Router::get('/allauthor',[UsersController::class,'all_author']);

Router::get('/addpublisher',[UsersController::class,'add_publisher']);
Router::get('/allpublisher',[UsersController::class,'all_publisher']);

Router::get('/newuser',[UsersController::class,'new_user']);
Router::post('/saveuser',[UsersController::class,'save_user']);


Router::get('/users',[UsersController::class,'show']);
Router::get('/category',[UsersController::class,'add_cat']);
Router::get('/view_cat',[UsersController::class,'all_cat']);
Router::get('/book',[UsersController::class,'add_book']);
Router::get('/author',[UsersController::class,'author']);
Router::get('/publisher',[UsersController::class,'publisher']);
Router::get('/order',[UsersController::class,'orders']);
Router::get('/books',function(){
  echo "books route path";
});


$system->start();

