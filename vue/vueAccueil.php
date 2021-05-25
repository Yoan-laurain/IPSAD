<header>
<?php include 'haut.php';?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</header>




<main class='mainAccueil' id='mainAccueil' style= "overflow-x: hidden; overflow-y: hidden;">
<marquee behavior="scroll" direction="left" width="100%" bgcolor="#EEEEEE" Scrollamount=13 >
    <div class="TexteDefilant active">
		<h2>
			<?php
				echo $_SESSION['Message'];
			?>  
		</h2>
    </div>
	<div class="TexteDefilant">
		<h2>
			<?php
				echo $_SESSION['Message2'];
			?>  
		</h2>
    </div>
</marquee>

	<br>
	<div class="contentAccueil">
		<?php $accueil->afficherFormulaire(); ?>
	</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
<script src="../IPSAD/JS/marquee.js"></script>
</main>


<footer>
	<?php 
  $formFooter2->afficherFormulaire();
  include 'bas.php' ;?>
</footer>




