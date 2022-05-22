<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
session_start();
if (isset($_POST['identifiant'])){
    $inscription_identifiant = stripslashes($_REQUEST['identifiant']);
    $inscription_identifiant = mysqli_real_escape_string($conn, $inscription_identifiant);
    $inscription_mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
    $inscription_mot_de_passe = mysqli_real_escape_string($conn, $inscription_mot_de_passe);
    $query = "SELECT * FROM `inscription` WHERE identifiant ='$inscription_identifiant' and mot_de_passe = '$inscription_mot_de_passe'";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['identifiant'] = $inscription_identifiant;
      header("Location: index1.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="https://waytolearnx.com/">Mangacity</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="identifiant" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>