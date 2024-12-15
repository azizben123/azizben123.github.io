<?php require("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
<a href="..\index.html" target="_parent" class="lienDeRetour"><p><span><i class="fa-solid fa-angle-left"></i></span>Retour au accueil</p></a>
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
$conn->close();
?>

</body>
</html>