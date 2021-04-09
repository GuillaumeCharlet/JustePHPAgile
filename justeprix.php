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
        
    </body>
</html>
