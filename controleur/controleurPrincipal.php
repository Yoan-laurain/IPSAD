<?php

//Recup le script de saison actif//

$_SESSION['script']=SaisonDAO::SaisonActive();

// Recupere dans l'url le menu ou en defini un si existe pas

if(isset($_GET['IPSAD'])){
	$_SESSION['IPSAD'] = $_GET['IPSAD'];
}
else
{
	if(!isset($_SESSION['IPSAD'])){
		$_SESSION['IPSAD'] = "accueil";
	}
}

//Appuie sur le bouton de devis gratuit//

if(isset($_POST['submitConnexPop']))
{
	header('location: index.php?IPSAD=contact'); 
	exit;
}

//Pour se connecter automatiquement grâce au cookies//

if(!isset($_SESSION['identification']) && isset($_COOKIE['jeton']))
{
	$_SESSION['identification'] = UtilisateurDAO::lire($_COOKIE['jeton']);
	
	if(!$_SESSION['identification'])
	{
		unset($_SESSION['identification']);
		$messageErreurConnexion="La session a expiré";
		$_SESSION['IPSAD'] = "connexion";
	}
}

// Menu de navigation

$menuNav = new Menu("IPSAD");


//Affiche connexion ou deconnexion suivant si l'utilisateur est connect�//

//Si il est authentifi� //

if (isset($_SESSION['identification']) && $_SESSION['identification']) 
{
	$menuNav->ajouterComposant($menuNav->creerItemLien("clientModif", "NOS CLIENTS",False,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("connexion", "DECONNEXION",False,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("compte", "MON COMPTE",False,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("admin", "PARAMETRES",False,False));
}
else
{
	$menuNav->ajouterComposant($menuNav->creerItemLien("accueil", "ACCUEIL",True,False));

	$menuNav->ajouterComposant($menuNav->creerItemLien("AQui", "A qui s'adressent nos offres",False,True));
	
	$menuNav->ajouterComposant($menuNav->creerItemLien("QuiSommesNous", "QUI SOMMES NOUS?",False,false));

	$menuNav->ajouterComposant($menuNav->creerItemLien("", "OFFRE DE SERVICES",True,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("confiance", "Ils nous font confiance",False,True));
	$menuNav->ajouterComposant($menuNav->creerItemLien("activites", "Nos offres de services",True,True));
	$menuNav->ajouterComposant($menuNav->creerItemLien("gestion","○ Gestion",False,True));
	$menuNav->ajouterComposant($menuNav->creerItemLien("anticipation", "○ Anticipation",False,True));
	$menuNav->ajouterComposant($menuNav->creerItemLien("securisation", "○ Securisation",False,True));

	$menuNav->ajouterComposant($menuNav->creerItemLien("client", "NOS CLIENTS",False,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("connexion", "CONNEXION",False,False));
	$menuNav->ajouterComposant($menuNav->creerItemLien("contact", "CONTACT",False,False));
}

$menuNav->creerMenu($_SESSION['IPSAD'], 'IPSAD');

// ####################################################################################################
// Footer

$formFooter2 = new Formulaire('post', 'index.php', 'fFooter', 'fFooter');

$formFooter2->ajouterComposantLigne($formFooter2->debutDiv("PopUp"));

	$formFooter2->ajouterComposantLigne($formFooter2->debutDiv("PopUpDoite"));
		$formFooter2->ajouterComposantLigne($formFooter2-> creerInputSubmit('submitConnexPop', 'submitConnexPop', 'Demandez votre devis gratuit'));
	$formFooter2->ajouterComposantLigne($formFooter2->finDiv());

$formFooter2->ajouterComposantLigne($formFooter2->finDiv());

$formFooter2->ajouterComposantTab();
$formFooter2->creerFormulaire();

$formFooter = new Formulaire('post', 'index.php', 'fFooter', 'fFooter');


$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerup"));

	$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerlink"));


		$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerlinkartc1"));
			$formFooter->ajouterComposantLigne($formFooter->creerTitre("INFORMATIONS"));
			$formFooter->ajouterComposantLigne($formFooter->debutUl());
				$formFooter->ajouterComposantLigne($formFooter->debutLi());
					$formFooter->ajouterComposantLigne($formFooter->creerLabelLink("", "", "https://ipsad.fr/index.php?IPSAD=contact", "Nous contacter"));
				$formFooter->ajouterComposantLigne($formFooter->finLi());
				$formFooter->ajouterComposantLigne($formFooter->debutLi());
					$formFooter->ajouterComposantLigne($formFooter->creerLabelLink("", "", "index.php?IPSAD=conditions", "Conditions générales"));
				$formFooter->ajouterComposantLigne($formFooter->finLi());
			$formFooter->ajouterComposantLigne($formFooter->finUl());
		$formFooter->ajouterComposantLigne($formFooter->finDiv());

		        
		$formFooter->ajouterComposantLigne($formFooter->creerImage("images/Logo2.png", ""));
	
	

		
		$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerlinkartc"));
			$formFooter->ajouterComposantLigne($formFooter->creerTitre("RÉSEAUX"));
			$formFooter->ajouterComposantLigne($formFooter->debutUl());
				$formFooter->ajouterComposantLigne($formFooter->debutLi());
					$formFooter->ajouterComposantLigne($formFooter->creerLabelLink("", "", "https://www.linkedin.com/in/ipsad-consult", "Notre linkedin", "_blank"));
				$formFooter->ajouterComposantLigne($formFooter->finLi());
			$formFooter->ajouterComposantLigne($formFooter->finUl());
        $formFooter->ajouterComposantLigne($formFooter->finDiv());

		$formFooter->ajouterComposantLigne($formFooter->finDiv());

		$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerTexte"));	
		$formFooter->ajouterComposantLigne($formFooter->creerLabel("TexteDroits", "","© 2021 IPSAD Tous droits réservés."));
		$formFooter->ajouterComposantLigne($formFooter->finDiv());


	$formFooter->ajouterComposantLigne($formFooter->finDiv());

$formFooter->ajouterComposantTab();
$formFooter->creerFormulaire();
// ####################################################################################################

// Dispatch
require_once dispatcher::dispatch($_SESSION['IPSAD']);