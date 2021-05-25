<?php
require_once 'lib/autoLoader.php';
require_once 'vendor/autoload.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>IPSAD</title>
		<style type="text/css">
			@import url(styles/IPSAD.css);
		</style>
	</head>
	<body >
		<?php
			require_once 'controleur/controleurPrincipal.php';	
			if($_SESSION['script']!="")
			{?>
				<script  type="text/javascript" src=<?php echo $_SESSION['script'] ?>></script>	
				<?php	}?>	
	</body>
</html>
