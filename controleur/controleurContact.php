<?php
//VARIABLES//

$messageErreurMail="";
$Options = array("-Sélectionner-","Demande d informations","Demande de devis","Autres");


//Si il veut envoyer un mail//

if (isset($_POST['submitMail']))
{
	//Vérification du captcha//

	if(Captcha::isvalid($_POST['g-recaptcha-response'])==false)
	{
		$message ="Remplissez le Captcha!";
	}
	else
	{
		if(!isset($_POST['Option']))
		{
			$_POST['Option']=" Non précisé";
		}
		//Envoie du mail//

		$result=Mail::smtpmailer('contact@ipsad.fr',$_POST['email'],$_POST['NomPrenom'],"Contact",$_POST['Message'],$_FILES['Pjointes'],1,$_POST['Num'],$_POST['RaisonSociale'],$_POST['Option']);
		$messageErreurMail = $result ? 'Nous vous remercions pour votre demande. Nos équipes mettent tout en œuvre pour vous répondre dans les plus brefs délais.' : "Votre message n'a pas pu être envoyé";
	}
}

/////////////////////////////////////////DEBUT FORMULAIRE//////////////////////////////////////////////////////////

$contact = new Formulaire('post', 'index.php', 'fcontact', 'fcontact','multipart/form-data');

//Partie gauche//

$contact->ajouterComposantLigne($contact->debutDiv("fullContentGauche"));
	$contact->ajouterComposantLigne($contact->creerTitre("Une question, un besoin, un projet?","2",""));
	$contact->ajouterComposantLigne($contact->creerLabel("","",'Contacter-nous, nos conseillers vous répondent!'));

	$contact->ajouterComposantLigne($contact->debutDiv("fullContentGaucheImage"));
		$contact->ajouterComposantLigne($contact->creerLabel("Visio","Visio",'Nous proposons également des interventions et des accompagnements en visioconférence'));
		$contact->ajouterComposantLigne($contact->creerImage("../IPSAD/images/Visio.png"));
	$contact->ajouterComposantLigne($contact->finDiv());

$contact->ajouterComposantLigne($contact->finDiv());

//Partie droite//

$contact->ajouterComposantLigne($contact->debutDiv("fullContent"));

	//Partie Image du top avec Texte de présentation//

	$contact->ajouterComposantLigne($contact->debutDiv("topContact"));
		$contact->ajouterComposantLigne($contact->debutDiv("topContact2"));
			$contact->ajouterComposantLigne($contact->creerTitre("Nous contacter"));
		$contact->ajouterComposantLigne($contact->finDiv());
	$contact->ajouterComposantLigne($contact->finDiv());
	$contact->ajouterComposantTab();

	//Partie fomulaire de contact//

	$contact->ajouterComposantLigne($contact->debutDiv("contentFormulaire"));
		$contact->ajouterComposantLigne($contact->debutDiv("GaucheFormulaire"));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Email*'));
			$contact->ajouterComposantLigne($contact->creerInputTexte('email', 'email', '', 1, '', ''));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Nom/prenom*'));	
			$contact->ajouterComposantLigne($contact->creerInputTexte('NomPrenom', 'NomPrenom',"",  1, '', ''));	
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Raison sociale*'));
			$contact->ajouterComposantLigne($contact->creerInputTexte('RaisonSociale', 'RaisonSociale', '', 1, '', ''));	
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Numéro de téléphone'));
			$contact->ajouterComposantLigne($contact->creerInputTexte('Num', 'Num', '', 0, '', ''));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Ma demande concerne : *'));	
			$contact->ajouterComposantLigne($contact->creerSelect("Option","Option",$Options,"-Sélectionner-"));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'*Champs Obligatoires'));
		$contact->ajouterComposantLigne($contact->finDiv());
		$contact->ajouterComposantLigne($contact->debutDiv("DroiteFormulaire"));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Votre message'));
			$contact->ajouterComposantLigne($contact->creerInputGrandTexte('Message', 'Message', '', 1, '', ''));
			$contact->ajouterComposantLigne($contact->creerLabel("","",'Contexte, Situation, éléments importants pour vous qui nous permettront de satisfaire au mieux à vos attentes'));
			$contact->ajouterComposantLigne($contact->creerInputFile('Pjointes', 'Pjointes'));
			$contact->ajouterComposantLigne($contact-> creerInputSubmit('submitMail', 'submitMail', 'Valider'));
			$contact->ajouterComposantLigne($contact->debutDiv("contentCaptchaContact"));
				$contact->ajouterComposantLigne($contact->debutDivCaptcha("g-recaptcha","6LcrvD8aAAAAADczbiujCo57skjV1uu_TYYsazon"));
				$contact->ajouterComposantLigne($contact->finDiv());
			$contact->ajouterComposantLigne($contact->finDiv());

			if(isset($message))
			{
				$contact->ajouterComposantLigne($contact->creerMessage($message));
			}

		$contact->ajouterComposantLigne($contact->finDiv());
	$contact->ajouterComposantLigne($contact->finDiv());

	$contact->ajouterComposantLigne($contact->creerMessage($messageErreurMail));
$contact->ajouterComposantLigne($contact->finDiv());

$contact->ajouterComposantTab();
$contact->creerFormulaire();

//////////////////////////////////////////////FIN FORMULAIRE//////////////////////////////////////////////////

require_once "vue/vueContact.php";