<?php

//Variables//

$messageErreur="";
$messageErreurMail="";

//Si il veut reste son password//

if(isset($_POST['reset']))
{
	//Si il n'a pas rempli le captcha//

	if(Captcha::isvalid($_POST['g-recaptcha-response'])==false)
	{
		$messageErreurMail="remplissez le Captha!";
		header('Location: index.php');
	}
	else
	{
		//Génération d'un mot de passe aléatoire//

		$mdp = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);

		//Vérification de l'existance de l'email dans la bdd//

		if(utilisateurDAO::lire2($_POST['Email'])==null)
		{
			$messageErreurMail="Cette email est incorrect";
		}
		else
		{
			//Modifie le mdp//

			utilisateurDAO::ModifierMDP($mdp . UtilisateurDAO::sel($_POST['Email']),utilisateurDAO::lire2($_POST['Email'])->getMail());         
			
			//Envoie du mail//
			$result = Mail::smtpmailer($_POST['Email'],'yoan.laurain1@gmail.com',"BotIPSAD","Reset Password","Voici votre nouveau mot de passe :".$mdp. "    Il vous est fortement conseillé de le changer une fois connecté.",null);
			$messageErreurMail = $result ? 'Un email vous a été envoyé' : "Il y a eu un problème réessayé";
		}		
	}
}

/////////////////////////////////////DEBUT FORMULAIRE TOP///////////////////////////////////////////

$formulaireMdpOublieTop = new Formulaire('post', 'index.php', 'fMdpOublieTop', 'fMdpOublieTop');

$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->debutDiv("MidMdpOublieSup"));

	$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->debutDiv("MidMdpOublieSupTexte"));
		$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->creerLabel("Titre","Titre","Mot de passe oublié?"));
	$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->finDiv());


	$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->debutDiv("MidMdpOublieLogo"));
		$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->creerImage("../images/Forgot.svg"));
	$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->finDiv());

$formulaireMdpOublieTop->ajouterComposantLigne($formulaireMdpOublieTop->finDiv());

$formulaireMdpOublieTop->ajouterComposantTab();
$formulaireMdpOublieTop->creerFormulaire();

//////////////////////////////////////////DEBUT FORMULAIRE MID/////////////////////////////////////////////////////////////////////

$formulaireMdpOublie = new Formulaire('post', 'index.php', 'fMdpOublie', 'fMdpOublie');

	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->creerLabel("","",'Email'));	
	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->br());
	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->creerInputTexte('Email', 'Email',"", 0,"", ''));
	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->br());
	$formulaireMdpOublie->ajouterComposantTab();

	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie-> creerInputSubmit('reset', 'reset', 'reset'));
	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->br());

	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->debutDiv("contentCaptchaMdp"));

		$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->debutDivCaptcha("g-recaptcha","6LcrvD8aAAAAADczbiujCo57skjV1uu_TYYsazon"));
		$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->finDiv());

	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->finDiv());

	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->br());
	$formulaireMdpOublie->ajouterComposantLigne($formulaireMdpOublie->creerMessage($messageErreurMail));

$formulaireMdpOublie->ajouterComposantTab();
$formulaireMdpOublie->creerFormulaire();

//////////////////////////////////////////FIN FORMULAIRE////////////////////////////////////////////////////////////////////////////

require_once 'vue/vueMdpOublie.php' ;