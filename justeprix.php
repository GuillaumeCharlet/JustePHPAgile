<html>
<head>
<meta charset="UTF-8">
</head>
    <body>
        <?php
        session_start();
        $coup = 0;
        $file = fopen("historique_chiffres.txt", "w");
        $min = $_POST["minvaleur"];
        $max = $_POST["maxvaleur"];
        $_SESSION['min'] = $min;
        $_SESSION['max'] = $max;
        $maxcoup = 10;
        $nb = rand($minvaleur, $maxvaleur);
        fwrite($file, $nb);
        fclose($file);

	if ( $min >= $max ) {
		header('Location: http://justeprix.local/index.php');
		exit();
	}

        $fileh = fopen("historique.txt", "w");
        fwrite($fileh,"");
        fclose($fileh);
        ?>
        <h1 class="titre">Le Juste Prix !</h1>
            <form action="testvaleur.php" method="post">
                <article class="espace_rep">
                    <p><input type="text" class="champ_rep" name="reponse" placeholder="Ta réponse !">
                    <input type="hidden" name="coup" value="0">
                    <button class="validate" type="submit" value="Plus" name="plus">   Valider !  </button></p>
                </article>
                <p class="compteur"> Vous avez <?php echo ("$maxcoup"); ?> coups maximum pour trouver la solution entre <?php echo ("$min et $max"); ?>! </p>
                <p class="compteur"> Coups: <?php echo ("$coup"); ?> </p>
            </form>
        <style>
            * {
                background-color: black;
                text-align: center;
                
            }
            .titre {
                text-align: center;
                font-size: 5em;
                font-family: Arial;
                color: grey;
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
                position: center;
            }
            .validate {
                margin-top: 1em;
                border: none;
                padding: 1em;
                background-color: green;
                border-radius: 10%;
            }
            .compteur {
                color: white;
                margin-top: 50px;
            }
        </style>
    </body>
</html>
