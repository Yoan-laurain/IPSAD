<div class="conteneurConnexion">
	<header>
		<?php include 'haut.php' ;?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	</header>
	<main class='mainAccueil' id='mainAccueil'>

		<div class="contentConnexion">
				<?php 
				    $formulaireConnexionGauche->afficherFormulaire();
					$formulaireConnexion->afficherFormulaire();
				?>
		</div>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
	</main>
	<script type="text/javascript" src=<?php echo $_SESSION['script'] ?>></script>
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>
