<?php
include('./layout/head.php');

session_start();
echo 'Pseudo : '.$_SESSION['pseudo'];
echo '<br/>';
echo 'Email : '.$_SESSION['email'];
echo '<br/>';
echo 'Password : '.$_SESSION['password'];
?>
<script>
  alert('cookies enregistrés');
</script>

<section class='d-flex justify-content-center'>
  <a href="./logout.php">
    <input class='btn btn-danger' type="button" value="Se déconnecter">  
  </a>
</section>