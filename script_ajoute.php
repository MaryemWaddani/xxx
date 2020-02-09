<?php

include("connexion.php");

$file_dest='files/'.$_FILES["fl"]["name"];
   if(move_uploaded_file($_FILES["fl"]["tmp_name"],$file_dest))
   {
   $req="insert into courriers values(null,?,?,?,?,?,?,0)";
$stmt=$bdd->prepare($req);
$res=$stmt->execute(array($_POST["etat"],$_POST["dt"], $_POST["obj"],$_POST["det"],$file_dest,$_POST["eml"]));
if($res)
 {

 	header("location:ajouter_courrier.php");
 }
else{

	echo("erreur");
}
   }
?>