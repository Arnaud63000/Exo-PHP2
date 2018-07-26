<?php
session_start();

echo $_SESSION['age']; echo $_SESSION['lastname'];   echo $_SESSION['firstname'];

   setcookie("test", $_POST["login"],  time()+3600); 
   setcookie("test", $_POST["mdp"],  time()+3600); 


   echo $_COOKIE['test'];
   
   echo $_COOKIE['test'] . " " . $_COOKIE['test'] . "<br><br><a href=\"user.php\"><button type=\"submit\">Modification Cookie</button></a>";
?>
