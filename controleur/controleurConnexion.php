<?php

///////////////////////////////////////////Si il veut se connecter//////////////////////////////////////////////////////////

if (isset($_POST['submitConnex'])) 
{    	
	if(Captcha::isvalid($_POST['g-recaptcha-response'])==false)
	{
		$message ="Remplissez le Captcha!";
	}
	else
	{
		//Vérifie l'identité de l'utilisateur//

		$var=UtilisateurDAO::verification($_POST['login'], $_POST['mdp'] . UtilisateurDAO::sel($_POST['login']));

		//Est authentifié//

		if (!empty($var)) 
		{
			$_SESSION['identification'] = UtilisateurDAO::lire($var);

			//Si il a coché le bouton se souvenir//

			if(isset($_POST['SeSouvenir']))
			{
				/*
				if(empty($_SESSION['identification']->getJeton()))
				{
					$jeton=Security::genererRandom(20);
					$_SESSION['identification']->setJeton($jeton);
					UtilisateurDAO::Jeton($jeton,$_SESSION['identification']->getMail());
				}*/
				setcookie('jeton',$var,time()+365*24*3600,null,null,false,true);
			}
			header('location: index.php?IPSAD=ClientModif'); 
			exit;
		}
		else 
		{
			$message = "Identifiant ou mot de passe incorrect !";
		}
		/*
		setcookie('mail',$_POST['login'],time()+365*24*3600,null,null,false,true);
		setcookie('password',md5($_POST['mdp']),time()+365*24*3600,null,null,false,true);*/
	}
}


//Affiche le formulaire de connexion//

if(!isset($_SESSION['identification']) || !$_SESSION['identification'])
{
	$formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', 'fConnexion');
	
	//PARTIE DROITE//

	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDivAos("conex","flip-up"));

									//Partie droite du formulaire//

		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerTitre("Connectez-vous"));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("","",'<h2>Identifiant</h2>'));		
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('login', 'login', '', 1, 'Entrez votre identifiant', ''));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("","",'<h2>Mot de Passe</h2>'));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputMdp('mdp', 'mdp',  1, 'Entrez votre mot de passe', ''));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->br());

		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv(""));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputCheck("SeSouvenir","SeSouvenir","",""));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("RememberMe","RememberMe",'Se souvenir de moi'));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());
		
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->br());
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider'));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->br());
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelLink("MDPOUBLIE", "", "index.php?IPSAD=MdpOublie", "Mot de passe oublié?", ""));
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->br());
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("contentCaptcha"));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDivCaptcha("g-recaptcha","6LcrvD8aAAAAADczbiujCo57skjV1uu_TYYsazon"));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());
		
		if(isset($message))
		{
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerMessage($message));
		}
		
			
	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());

	$formulaireConnexion->ajouterComposantTab();
	$formulaireConnexion->creerFormulaire();

	//Partie gauche du formulaire//

	$formulaireConnexionGauche = new Formulaire('post', 'index.php', 'fConnexionGauche', 'fConnexionGauche');
    $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->debutDivAos("MidConnexionGauche","flip-up"));
        $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->debutDiv("MidConnexionGauche2"));

		
        $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->debutDiv("MidformulaireConnexionGaucheTitre"));
            $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->creerTitre("Espace de connexion"));
        $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->finDiv());

            $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->debutDiv("MidConnexionTexteGauche"));
                $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->creerLabel("","","Avec IPSAD restez en permanence au maximum!"));
            $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->finDiv());

			
			$formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->debutDiv("MidConnexionLogo"));
			$formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->creerImage("../IPSAD/images/Login.svg"));
		$formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->finDiv());
	

        $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->finDiv());
    $formulaireConnexionGauche->ajouterComposantLigne($formulaireConnexionGauche->finDiv());

	$formulaireConnexionGauche->ajouterComposantTab();
	$formulaireConnexionGauche->creerFormulaire();

	require_once 'vue/vueConnexion.php' ;
}
else
{
	$_SESSION['identification']=[];
	setcookie('jeton','',time()-3600);
	$_SESSION['IPSAD']="formulaireConnexionGauche";
	header('location: index.php');
}