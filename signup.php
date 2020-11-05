<?php
session_start();

if(isset($_SESSION['user']))
{
    header('Location: index.php');

}

if($_SERVER['REQUEST_METHOD']=='POST')
{
$user= filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
$password= $_POST['password'];
$password2= $_POST['password2'];


$errors='';
if(empty($user) or empty($password) or empty($password2)){
    $errors .= '<li> please fill all the data</li>';
}
else{
require 'conection.php';

$statement= $pdo->prepare('SELECT * FROM users WHERE user= :user LIMIT 1');
$statement-> execute(array(':user'=> $user));
$result= $statement->fetch();
if($result !=false){
    $errors .='<li> this user already exist</li>';
}
$password= hash('sha512', $password);
$password2= hash('sha512', $password2);
//echo $user . $password . $password2;
if($password != $password2){
    $errors .="<li> the passwords doesn't match</li>";
}


}
if($errors==''){
    $statement= $pdo->prepare('INSERT INTO users(id, user, pass) VALUES(null,:user,:pass)');
    $statement->execute(array(':user'=>$user, ':pass'=>$password));

    header('Location: login.php');
}
}
require 'views/signup.view.php';
?>
