<?php

$messageErreurAvis="";
$LesRegions = new Regionss(RegionDAO::lesRegions());
$ListeRegions= $LesRegions->getRegions();

$Local=array();

foreach($ListeRegions as $uneLoca)
{
    array_push($Local,$uneLoca->getlibelle());
}

if(isset($_POST['EnvoiAvis']))
{

    //Vérification du captcha//

	if(Captcha::isvalid($_POST['g-recaptcha-response'])==false)
	{
		header('Location: index.php');
        exit;
	}
	else
	{       
        AvisDAO::ajouter($_POST['Message'],$_POST['NomEntreprise'],$_FILES['Pjointes']['name'],$_POST['Secteur'],$_POST['Localisation']);

		//Envoie du mail//

		$result=Mail::smtpmailer('yoan.laurain1@gmail.com','BotIPSAD@gmail.com','','Nouvel avis',"Un nouvel avis vient d'être proposé sur votre site . Vous pouvez des à présent allers sur votre site internet ipsad.fr dans l'espace 'nos clients' pour pouvoir gérer cet avis!");
        $messageErreurAvis = $result ? 'Nous vous remercions pour votre avis nos equipes vont vérifier votre message' : "Votre avis n'a pas pu être envoyé";
        require_once 'lib/upload.php';
    }
}



$formulaireAvis = new Formulaire('post', 'index.php', 'fAvis', 'fAvis','multipart/form-data');

$formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvis"));

    $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisTitre"));
        $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerTitre("Donnez nous votre avis!", 2));
    $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

    $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisFullContent"));
    
        $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisContent"));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisLabel"));
                $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("Titre","Titre","Exprimez-vous!"));
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("","","Nom de l'entreprise"));		
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerInputTexte('NomEntreprise', 'NomEntreprise', '', 1, '', ''));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("","","Votre secteur d'activité"));		
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerInputTexte('Secteur', 'Secteur', '', 1, '', ''));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("","","Votre Région"));	
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerSelect("Localisation","Localisation",$Local,""));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("","","Votre avis"));		
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerInputGrandTexte('Message', 'Message', '', 1, '', ''));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerLabel("","",'Votre logo'));
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerInputFile('Pjointes', 'Pjointes'));

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisBoutton"));
                $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerInputSubmit("EnvoiAvis","EnvoiAvis","Soumettre",""));
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("contentCaptchaAvis"));

                $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDivCaptcha("g-recaptcha","6LcrvD8aAAAAADczbiujCo57skjV1uu_TYYsazon"));
                $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerMessage($messageErreurAvis));

        $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

        /*
        $formulaireAvis->ajouterComposantLigne($formulaireAvis->debutDiv("MidAvisContentImage"));
            $formulaireAvis->ajouterComposantLigne($formulaireAvis->creerImage("images/fusee.jpg"));
        $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());
    */
    $formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

$formulaireAvis->ajouterComposantLigne($formulaireAvis->finDiv());

$formulaireAvis->ajouterComposantTab();
$formulaireAvis->creerFormulaire();

require_once 'vue/vueAvis.php' ;