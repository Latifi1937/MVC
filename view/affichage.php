<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA</h1>
    <table border="1">
        <tr>
            <th>name</th>
            <th>prix</th>
            <th>descreption</th>
        </tr>
    <?php 
    require "./modal/connexion.php";
    $requete = 'SELECT * FROM produit';
    $query = mysqli_query($conn,$requete);
    while($rows = mysqli_fetch_assoc($query)){
        $id = $rows['id'];
    echo "<tr>";
    echo "<td>".$rows['name']."</td>";
    echo "<td>".$rows['prix']."</td>";
    echo "<td>".$rows['descreption']."</td>";
    echo "<td><a href='delete.php?id=" . $id . "'>supprimer</a></td>"; 
    echo "</tr>";
    }
    ?>
    </table>
</body>
</html>