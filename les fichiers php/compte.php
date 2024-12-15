<?php
require("connection.php");
if (empty($_POST['email']) || empty($_POST['password'])) {
    die("L'email et le mot de passe sont obligatoires.");
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM utilisateurs WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$s=0;
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password,$user['password'])) {
        $message = "Votre compte est ouvert.";
        $x = 1;
        if ($user['status'] == 'Admin' || $user['status'] == 'Développer') {
            $s = 1;
        }
    } else {
        $message = "Mot de passe incorrect.";
        $x = 2;
    }
} else {
    $message = "Ce compte n'existe pas.";
    $x = 2;
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\formulaire de connexion\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="..\formulaire de connexion\javaScript.js"></script>
      <?php if ($s==1): ?>
         <script>window.open('DashBoard.php', '_blank');</script>
      <?php endif; ?> 
      <?php 
        $messageStyle = ($x==1) ? 'color:green;' : 'color:red;';
       ?>
</head>
<body>
    <a href="C:\xampp\htdocs\site societe\index.html" target="_parent" class="lienDeRetour"><p><span><i class="fa-solid fa-angle-left"></i></span>Retour au accueil</p></a>
    <div style="display: grid;place-items: center;">
        <div class="bande"><p>Connectez-vous à votre compte</p></div>
        <div class="container">
        <p class="message" style="<?php echo $messageStyle ?>"><?php echo $message; ?></p>
        <form onsubmit="return validerFormulaireConnection()" action="http://localhost/site societe/les fichiers php/compte.php"  method="post">
            <table>
                <tr>
                    <td class="label"><p>Email</p></td>
                    <td class="input"><input type="text" name="email" id="email" oninput="couleurBordure('email')"></td>
                </tr>
                <tr>
                    <td class="label"><p style="transform: translateY(-8px);">Mot de passe</p</td>
                    <td class="input"><input type="password" id="password" name="password" oninput="couleurBordure('password')"><div class="linkPass"><a href="#">Mot de passe oublié?</a>
                    <a href="..\formulaire de connexion\formulaire d'inscription\index.html" target="main">S'inscrire?</a></div></td>
                </tr>
            </table>
            <div class="button-container">
                <input type="submit" value="Connexion">
            </div>
        </form>
        </div>
    </div>


    
</body>
</html> 