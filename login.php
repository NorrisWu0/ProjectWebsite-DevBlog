<?php
require('vendor/autoload.php');

// create account
use DevBlog\Account;
if( $_SERVER['REQUEST_METHOD']=='POST' ){
  $email = $_POST['email'];
  $password = $_POST['password'];

  //create an instance of account class
  $acc = new Account();
  $login = $acc -> login( $email, $password );
}
else{
  $login='';
}

use DevBlog\Comment;
$account = new Comment();
if ( $account -> getUserAuthStatus() ){
  header('location: index.php');
}

//create twig loader for templates
$loader = new Twig_Loader_Filesystem('templates');
//create twig environment and pass the loader
$twig = new Twig_Environment($loader);
//call a twig template
$template = $twig -> load('login.twig');
//output the template and pass the data

echo $template -> render( array(
    'login' => $login,
    // 'navigation' => $navigation,
    'title' => 'Login to your account'
) );
?>