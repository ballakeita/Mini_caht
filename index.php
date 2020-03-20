<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        display:block;
        margin:1%;
        padding:1px;
    }
</style>
<body>
<form action="minichat_post.php" method="POST">
    <input type="text" name="nom" id="nom">
    <input type="text" name="message" id="nom">
    <input type="submit" value="Envoyer">
</form>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=mini_chat','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$afficherContenu = $bdd->query('SELECT DAY(date_ajout)AS jour,nom,message FROM contenu ');
while ($donnees = $afficherContenu->fetch()){
    echo '<p>'  .$donnees['jour']. ' '.$donnees['nom']. ' : '. $donnees['message']. '</p>';

}


?>

 
    
</body>
</html>