<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="javaScript.js"></script>
    
</head>
<body>
    <form onsubmit="return validerFormulaireConnection()">
    <a href="C:\xampp\htdocs\site societe\index.html" target="_parent" class="lienDeRetour"><p><span><i class="fa-solid fa-angle-left"></i></span>Retour au accueil</p></a>
    <div style="display: grid;place-items: center;">
        <div class="bande"><p>Connectez-vous à votre compte</p></div>
        <div class="container">
            <table>
                <tr>
                    <td class="label"><p>Email</p></td>
                    <td class="input"><input type="text" name="" id="email" oninput="couleurBordure('email')" onsubmit="return couleurBordure('email')"></td>
                </tr>
                <tr>
                    <td class="label"><p style="transform: translateY(-8px);">Mot de passe</p</td>
                    <td class="input"><input type="password" id="password" oninput="couleurBordure('password')"><div class="linkPass"><a href="#">Mot de passe oublié?</a>
                    <a href="formulaire d'inscription\index.html" target="main">S'inscrire?</a></div></td>
                </tr>
            </table>
            <div class="button-container">
                <input type="submit" value="Connexion">
            </div>
        </div>
    </div>
</form>

    
</body>
</html> 