<html>
<?php
$minvaleur = null;
$maxvaleur = null;
?>
<h1>Veuillez indiquer une valeur minimale et maximale</h1>
<h6>Attention la valeur minimale doit êter inférieur à la valeure maximale, autrement vous resterez sur cette page jusqu'à ce que la leçon soit comprise.</h6>
<form action="justeprix.php" method="post">
	<article class="espace_rep">
		<p><input type="text" class="champ_rep" name="minvaleur" placeholder="Valeur minimale"></p>
		<p><input type="text" class="champ_rep" name="maxvaleur" placeholder="Valeur maximales"></p>
		<button class="validate" type="submit" value="Plus" name="plus">   Valider !  </button></p>
	</article>
</form>
</html>
