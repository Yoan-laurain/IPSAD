<div class="conteneurAvis">
	<header>
		<?php include 'vue/haut.php' ;?>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</header>
	<main>
		<div class="contentAvis">
				<?php 
                    $formulaireAvis->afficherFormulaire();
				?>							
		</div>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
	</main>
	
	<footer>
		<?php 
			include 'bas.php' ;
		?>
	</footer>
</div>
