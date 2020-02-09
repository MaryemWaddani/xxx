<?php

include("connexion.php");
$req2="select * from courriers where ref_bo=?";
	 $stmt2=$bdd->prepare($req2);
	 $res2=$stmt2->execute(array($_GET["ref"]));
	 $tab=$stmt2->fetchAll();


//the subject
$sub = "Your subject";
//the message
$msg = "Your message";
//recipient email here
$rec = "daklauimoataz@gmail.com";
//send email
mail($rec,$sub,$msg);
  
       echo "Mail Not Sent";

       $req="update courriers set validation=true where ref_bo=?";
 $stmt=$bdd->prepare($req);
$res=$stmt->execute(array($_GET["ref"]));
if($res)
 {
header("location:validation.php");
 }
   


?>