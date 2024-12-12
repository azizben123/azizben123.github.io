<?php require("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    

</head>
<body>
<?php
    $value = $_GET['value'].'%';
    $sql = "SELECT * FROM article where Reference like '$value'";
        $result = $conn->query($sql);
        $nb_ligne= $result->num_rows;
        echo "<div class='bande'><p>les Portes</p></div>";?>
<?php
        echo "<div class='containerback'>";
             for ($i = 0; $i < $nb_ligne; $i++){
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
                    <p>".$row['Prix']." DT</p>
                </div>
                <button>Commander</button>
                </div>
            </div>");
    }
    echo "</div>";

?>

</body>
</html>