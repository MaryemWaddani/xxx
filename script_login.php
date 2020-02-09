<?php
include("connexion.php");
$user=$_POST["login"];
$pass=$_POST["psw"];
if(!empty($user) && !empty($pass)){
   $sql = "Select * from utlisateur WHERE profil='".$user."' and password='".$pass."' ";
   $stmt=$bdd->prepare($sql);
   $res=$stmt->execute();
   $tab=$stmt->fetchAll();
   if($stmt->rowCount()!=0)
   {
	   session_start();
	   $_SESSION["username"]=$user;
	   $_SESSION["role"]=$tab[0]["role"];
	   header("location:consult.php");
	   }
	   else{
		    header("location:index.php");
		   
		   }
		   
		  
}
else
{
 header("location:index.php");
	}




?>