<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$host = 'localhost';
$username = 'root';  
$password = '';      
$dbname = 'societe'; 
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
<?php $sql = "SELECT * FROM article";
        $result = $conn->query($sql);
        $nb_ligne= $result->num_rows;
 echo "<div class='bande'><p>les Portes</p></div>";?>
<?php
    $d_flex=1;
    $k=(int)($nb_ligne/3);
    for  ($j = 0; $j <= $k; $j++){
        if($j==$k && ($nb_ligne%3)!=0){$colonne=$nb_ligne%3;$d_flex='containerback2';}
        else{$colonne=3;$d_flex='containerback1';}
        echo "<div class='$d_flex'>";
             for ($i = 0; $i < $colonne; $i++){
                $row = $result->fetch_assoc();
                echo ("
                <div class='card'>
                <div class='image-container'>
                <img src=".$row['Image'].">
                </div>
                <div class='information'>
                <div class='card-title'>
                    <p>".$row['nom']."</p>
                </div>
                <div class='price'>
                    <p>".$row['Prix']." dt</p>
                </div>
                <button>Commander</button>
                </div>
            </div>");
    }
    echo "</div>";
}
?>

</body>
</html>