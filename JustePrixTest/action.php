<?php
$serveur="localhost";
$login="root";
$mdp="";
$bd = "bdlogin";
$tables = "users";

$loginuser = sanitizeString($_POST['login']);
$pswuser = sanitizeString($_POST['psw']);

function sanitizeString($var) {
if(get_magic_quotes_gpc())   //si activée magic ajoute des apostrophes avec des barres obliques
  $var = stripslashes($var); //enlève les barres obliques indésirables      // enlève toute balise html
$var = htmlentities($var);    //egal à la précédente
return $var;
}


$connexion=mysqli_connect($serveur,$login,$mdp)
or die("Connexion impossible au serveur $serveur pour $login");

$conn = mysqli_select_db($connexion,$bd)
or die("Impossible d'accéder à la base de données");

$req1 ="SELECT `login` FROM `users` WHERE login = '".$loginuser."'";
$req2 ="SELECT `mdp` FROM `users` WHERE mdp = '".$pswuser."'";
$req3 ="SELECT `login` FROM `users` WHERE login = '".$loginuser."' AND mdp = '".$pswuser."'";

$result = mysqli_query($connexion,$req1)or die("1");
$result2 = mysqli_query($connexion,$req2)or die("2");
$result3 = mysqli_query($connexion,$req3)or die("3");

if((mysqli_num_rows($result) and mysqli_num_rows($result2) and mysqli_num_rows($result3))==1) 
    {
        session_start();
		if($loginuser == 'admin'){
			$_SESSION[$loginuser] = "admin".rand();
            if(!isset($_SESSION["cle"])){
                $_SESSION["cle"] = 1;
            }
            header('Location:justeprix.php');
		}
		else{
			$_SESSION["play"] = "play".rand();
            header('Location:justeprix.php');
		}
    }
else
    {
       header('Location:index.php');
    }
?>
