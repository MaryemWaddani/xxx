<?php

try{
$bdd = new PDO('mysql:host=localhost;dbname=bd_stage', 'root', '');


}
catch(PDOException $e){

	die('Erreur : ' . $e->getMessage());
}


?>