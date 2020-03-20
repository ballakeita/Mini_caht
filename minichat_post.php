<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mini_chat','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$ajoutMessage = $bdd->prepare('INSERT INTO contenu(nom,message,date_ajout) VALUES(?,?,NOW())');
$ajoutMessage->execute(array($_POST['nom'],$_POST['message']));
header('Location: index.php');
?>