<?php

include("connexion.php");
       $req="update utlisateur set profil=?,password=?,role=? where id_user=?";
 $stmt=$bdd->prepare($req);
$res=$stmt->execute(array($_POST["username"],$_POST["pssword"],$_POST["role"],$_GET["iduser"]));
if($res)
 {
header("location:consult_users.php");
 }
   


?>