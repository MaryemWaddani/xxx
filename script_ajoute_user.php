<?php

include("connexion.php");

   $req="insert into utlisateur values(null,?,?,?)";
$stmt=$bdd->prepare($req);
$res=$stmt->execute(array($_POST["username"],$_POST["password"], $_POST["role"]));
if($res)
 {

 	header("location:ajouter_user.php");
 }
else{

	echo("erreur");
}
   
?>