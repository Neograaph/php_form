<?php
session_start();

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){
  $pseudo=$_POST['pseudo'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  if(!empty(('pseudo') && !empty('email') && !empty('password'))){
    // echo 'Pseudo: '.$pseudo;
    // echo '<br/>';
    // echo 'email: '.$email;
    // echo '<br/>';
    // echo 'Mdp: '.$password;
    // echo '<br/>';


    $_SESSION['pseudo']=$pseudo;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;


  }
  else{
    echo 'data error';
    echo '<br/>';
  }
}
else{
  header('location:404.php');
  exit();
}

$good_password='aze';
$hash=password_hash($password,PASSWORD_BCRYPT);

if(password_verify($good_password,$hash)){
  header('location:profil.php');
}
else{
  header('location:register.php');
  echo 'password incorrect';
}

?>
