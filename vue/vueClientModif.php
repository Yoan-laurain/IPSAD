<div class="conteneurClientModif">
	<header>
		<?php include 'vue/haut.php' ;?>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	</header>
	<main>
		<div class="contentClientModif">
				<?php 
                    $formulaireClientModif->afficherFormulaire();
				?>							
		</div>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
	</main>
	
	<footer>
		<?php 
			$formFooter2->afficherFormulaire();
			include 'bas.php' ;
		?>
	</footer>
</div>
