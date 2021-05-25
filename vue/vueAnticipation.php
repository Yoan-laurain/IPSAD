<div class="conteneurAnticipation" style= "overflow-x: hidden!important; overflow-y: hidden!important;">
	<header>
		<?php include 'vue/haut.php' ;?>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	</header>
	<main  style= "overflow-x: hidden!important; overflow-y: hidden!important;">
		<div class="contentAnticipation">
				<?php 
                    $formulaireAnticipation->afficherFormulaire();
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
