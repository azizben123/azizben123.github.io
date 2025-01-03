<?php
require("connection.php");
$email = $_POST['email'];
$sql = "SELECT * FROM utilisateurs WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $Message="Ce email existe !";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\formulaire de connexion\formulaire d'inscription\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="..\formulaire de connexion\javaScript.js"></script>
    <?php if ($result->num_rows===0):  ?>
        <style>
            .table1{
                display:none;
            }
            .message{
                color:green;
            }
        </style>
    <?php endif; ?>
    <?php if ($result->num_rows > 0):  ?>
        <style>
            .table2{
                display:none;
            }
        </style>
    <?php endif; ?>

</head>
<body>
    <a href="..\index.html" target="_parent" class="lienDeRetour"><p><span><i class="fa-solid fa-angle-left"></i></span>Retour au accueil</p></a>
    <div class="bande"><p>Créez votre compte</p></div>
    <div style="display: grid;place-items: center;">
        <div class="container">
        <?php if (!empty($Message)) : ?>
            <p class="message"><?php echo htmlspecialchars($Message); ?></p>
        <?php endif; ?>
        <form onsubmit="return validerFormulaireInscription()" action="http://localhost/site societe/les fichiers php/inscription.php" method="post">
        <div class="table1">
            <table class="table1">
                <tr>
                    <td class="label"><p>Nom</p></td>
                    <td class="input" ><input type="text" id="nom" name="nom" oninput="couleurBordure('nom')"></td>
                    <td class="label"><p>Prenom</p></td>
                    <td class="input"><input type="text" id="prenom" name="prenom" oninput="couleurBordure('prenom')"></td>
                </tr>
                <tr>
                    <td class="label"><p>Mobile</p></td>
                    <td class="input"><input type="text" id="NumTel" name="numTel" oninput="couleurBordure('numTel')"></td>
                    <td class="label"><p>Email</p></td>
                    <td class="input"><input type="email" id="email" name="email" oninput="couleurBordure('email')"></td>
                </tr>
            </table>
            <div class="button-container">
                <input type="submit" value="Créez">
            </div>
        </div>
        </form>
        <form onsubmit="return validerFormulaireMotDePasse()" 
        action="http://localhost/site societe/les fichiers php/validationInscrit.php?email=<?php echo $_POST['email'];?>&nom=<?php echo $_POST['nom'];?>&prenom=<?php echo $_POST['prenom'];?>&numTel=<?php echo $_POST['numTel'];?>"
         method="post">
           <div class="table2">
            <table class="table2">
                <tr>
                    <td class="label2"><p>Mot de passe</td>
                    <td class="input2"><input type="password" name="password1" id="password1" oninput="couleurBordure('password1')"></td>
                </tr>
                <tr>
                    <td class="label2"><p>Confirmer le mot de passe </p></td>
                    <td class="input2"><input type="password" name="password2" id="password2" oninput="couleurBordure('password2')"></td>
                </tr>
           </table>
           <div class="button-container">
                    <input type="submit" value="Confirmer">
            </div>
            </div>
        </form>
           
        </div>
    </div>

    
</body>
</html>