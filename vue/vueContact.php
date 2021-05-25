<div class="conteneurContact">
	<header>
		<?php include 'haut.php' ;?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</header>
	<main>
		<div class="contentContact">
				<?php 
					$contact->afficherFormulaire();
				?>
			</div>
		</div>
	</main>
	
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>
