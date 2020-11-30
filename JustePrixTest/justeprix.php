<html>
<head>
<meta charset="UTF-8">
</head>
    <body>
        <?php
        $coup = 0;
        $file = fopen("historique_chiffres.txt", "w");
        $min = 0;
        $max = 100;
        $nb = rand($min, $max);
        fwrite($file, $nb);
        fclose($file);

        $fileh = fopen("historique.txt", "w");
        fwrite($fileh,"");
        fclose($fileh);
        ?>
        <h1 class="titre">Le Juste Prix !</h1>
            <form action="affirmationvaleur.php" method="post">
                <article class="espace_rep">
                    <p><input type="number" class="champ_rep" name="reponse" min="0" max="100" placeholder="Entrez votre proposition:">
                    <input type="hidden" name="coup" value="0">
                    <button class="validate" type="submit" value="Plus" name="plus">   Valider !  </button></p>
                </article>
                <p class="compteur"> Coups: <?php echo ("$coup"); ?> </p>
            </form>
        <style>
            * {
                background-color: #B0E2FF;
            }
            .titre {
                text-align: center;
                font-size: 5em;
                font-family: Arial;
                color: black;
            }
            .espace_rep {
                margin: auto;
                width: 20%;
                height: 5em;
                text-align: center;
            }
            .champ_rep {
                border: none;
                background-color: white;
                padding: 1em;
                margin: auto;
            }
            .validate {
                margin-top: 1em;
                border: none;
                padding: 1em;
                background-color: green;
                border-radius: 10%;
            }
            .compteur {
                color: black;
            }
        </style>
    </body>
</html>
