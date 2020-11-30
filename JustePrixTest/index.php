<?php
session_start();
unset($_SESSION["errormessage"]); //Reinitialisation du message d'erreur
if(isset($_SESSION["admin"])){
unset($_SESSION["admin"]);
}
if(isset($_SESSION["play"])){
unset($_SESSION["play"]);
}


echo "
<html lang='fr'>
<head>
<meta charset='utf-8'/>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
</script>

<script>
$(document).ready (function() {
$('h1').on({
mouseenter : function(){
$(this).css('background-color', 'white');
}
});
</script>

<style>
body {
font-family : 'Open Sans', sans-serif;
background-image:url('images/cac.jpg');
background-color : #B0E2FF;
color : black;
font-family:consolas;
}

input {


}
</style>
<center>
<h1> Accès à l'intranet </h1>
</center>
</head>


<body>
<form action='action.php' method='post'>
<fieldset style='color:black;border-radius:15px;border-color:white;box-shadow: 0px 0px 17px 0px rgba(0,0,0,1);'>
<center>
<h2> Connexion </h2>
<legend>Login :</legend>
<input style='background-color:#B0E2FF;border: none;border-bottom: 2px solid black;' type='text' name='login' />
<br>
<br/>
<legend>Password :</legend>
<input   style='background-color:#B0E2FF;border: none;border-bottom: 2px solid black;'type='password' name='psw' />
<br>
<br/>
<input type='submit' value='Valider' />
</center>
</fieldset>
</form>


<div id='french' style='margin:40px;float:left;border-style: solid;border-color:#96e596;border-radius:15px;background-color:#96e596;color:black;box-shadow: 0px 0px 17px 0px rgba(0,0,0,1);'>
<center>
<h1>Présentation en Français</h1>
<p>Bonjour et bienvenu au Juste Prix.</p>
<br>Comme vous devez déjà connaitre le jeu télévisé, je ne rentrerai pas dans les détails de ce dernier.
<br>Cependant, je vais vous expliquer le B-A BA.
<br>En chargant la prochaine page, un chiffre entre 1 et 100 sera généré.
<br>Vous aurez 10 chances pour deviner le nombre. Si vous échouez, ou que vous gagnez , vous serez inviter à recommencer.
<br>Les stats de la partie courante seront enregistré dans le fichier 'historique.txt'.
<br>Bonne chance et amusez vous :) !
<br><br><br>
</center>
</div>

<div id='english' style='margin:40px;float:right;border-style: solid;border-radius:15px;border-color:#96e596;background-color:#96e596;color:black;box-shadow: 0px 0px 17px 0px rgba(0,0,0,1);'>
<center>
<h1>Presentation in English</h1>
<p>Hello and welcome to The Price Is Right.</p>
<br>As you probably know the television show, I won't go into much detail regarding that.
<br>However, I will describe the basics.
<br>As you load the next page, a number between 1 and 100 will be generated.
<br>You have 10 tries to guess the right number. If you lose , youl'll be prompted to retry , same if you win.
<br>The stats for your current game will be saved in a file called 'historique.txt'.
<br>Good luck , and have fun :) !
<br><br><br>
</center>
</div>



</div>
</body>



</html>
";
?>
