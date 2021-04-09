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
        $maxcoup = 10;
        $nb = rand($min, $max);
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
                <p class="compteur"> Vous avez <?php echo ("$maxcoup"); ?> coups maximum ! </p>
                <p class="compteur"> Coups: <?php echo ("$coup"); ?> </p>
            </form>
        
    </body>
</html>
