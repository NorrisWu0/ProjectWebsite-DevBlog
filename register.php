<?php
require('vendor/autoload.php');

// use aitsydney\Navigation;
use DevBlog\Account;

// if request_method == post, user is submitting the register form
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //create instance of account class
    $account = new Account();
    $register = $account -> register($username,$email,$password);
}
else{
    $register = '';
}

use DevBlog\Comment;
$account = new Comment();
if ($account -> getUserAuthSttus() ){
  header('location: index.php');
}


//create twig loader
$loader = new Twig_Loader_Filesystem('templates');

//create twig environment
$twig = new Twig_Environment($loader);

//load a twig template
$template = $twig -> load('register.twig');

//pass values to twig
echo $template ->render([
    // 'navigation' => $nav_items,
    'title' => 'Register for an account',
    'response' => $register
]);
?>
