<div class="conteneurCompte">
	<header>
		<?php include 'vue/haut.php' ;?>
	</header>
	<main>
		<div class="contentCompte">
				<?php 
					$formulaireCompteTop->afficherFormulaire();
                    $formulaireCompte->afficherFormulaire();
				?>							
		</div>
	</main>
	
	<footer>
		<?php include 'vue/bas.php' ;?>
	</footer>
</div>
