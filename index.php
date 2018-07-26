<?php 

    session_start();

?>
<doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>page exo partie 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
</head>
<body>



<?php
// exo 1
// User Agent

echo $_SERVER['HTTP_USER_AGENT'] . "\n\n<br>";

// Adresse IP

echo $_SERVER["REMOTE_ADDR"] . "<br>"; 

// Nom hôte

echo $_SERVER['SERVER_NAME'];

// exo 2
// session_start()  initialisé début de page


$_SESSION['lastname'] = 'Blabla';
$_SESSION['firstname'] = 'Arnaud';
$_SESSION['age'] = 22;


?>
<a href="cible.php">clic</a><br><br>


<form action="cible.php" method="post">
    <table>
        <tr>
            <td>
                <label> Entrez votre pseudo:</label>
                <input type="text" name="login" placeholder="Pseudo"> 
            </td>
        </tr>
        <tr>
            <td>
                <label> Entrez votre mot de passe:</label>
                <input type="text" name="mdp" placeholder="Mot De Passe"> 
            </td>
        </tr>
    </table>
    <button type="submit">Envoyez</button>
</form>

</body>
</html>
