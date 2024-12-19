<?php
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$descreption = $_POST['descreption'];
$requete="INSERT INTO produit (nom, prix, descreption)
VALUES ('$nom', '$prix', '$descreption')";  
$query = mysqli_query($conn,$requete);
if($query){ 
    echo"<h1>insertion avec succes</h1>";
}else{
    echo"<h1>eureur d insertion</h1>";
}
?>