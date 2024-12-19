<?php
require'connexion.php';
$id = $_GET["id"];
$sql = "DELETE FROM produit WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
if(isset($query)){
    header("location:aff.php");
}

?>