<header>
	<?php include 'haut.php';?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="10000">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Fond4.png" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="images/Fond5.png" class="d-block w-100" alt="...">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</header>

<main class='mainAccueil' id='mainAccueil' style= "overflow-x: hidden; overflow-y: hidden;">

	<div class="contentActivites">
		<?php
		  $formulaireActivites->afficherFormulaire();
		?>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</main>


<footer>
	<?php 
  $formFooter2->afficherFormulaire();
  include 'bas.php' ;?>
</footer>