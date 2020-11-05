<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: index.php');
}
$errors='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user= $_POST['user'];
    $password= $_POST['password'];
    $password= hash('sha512', $password);
    require 'conection.php';

    $statement= $pdo->prepare('SELECT * FROM users WHERE user= :user AND pass= :pass');
    $statement->execute(array(':user'=>$user, ':pass'=>$password));
    $result= $statement->fetch();

   if($result !== false){
       $_SESSION['user']=$user;
       header('Location: index.php');
   }
   else{
$errors .='<li> incorrect</li>';
   }

}
require 'views/login.view.php';
?>
