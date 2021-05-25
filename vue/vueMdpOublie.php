<div class="conteneurMdpOublie">
	<header>
		<?php include 'vue/haut.php' ;?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</header>
	<main>
		<div class="contentMdpOublie">
				<?php 
				 	$formulaireMdpOublieTop->afficherFormulaire();
                    $formulaireMdpOublie->afficherFormulaire();
				?>							
		</div>
	</main>
	
	<footer>
		<?php 
			$formFooter2->afficherFormulaire();
			include 'bas.php' ;
		?>
	</footer>
</div>
