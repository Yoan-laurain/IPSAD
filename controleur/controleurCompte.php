<?php

//On Recupère les informations de l'utilisateur//

$utilisateur = utilisateurDAO::lire2($_SESSION['identification']->getMail());

//Variables//

$messageErreurCompte="";
$messageErreurPrenom="";
$messageErreurEmail="";
$messageErreurMdp="";
$messageErreurModif="";
$messageErreurMp="";
$messageErreurCompte="";

///////////////////////////////Si il veut supprimer sont compte///////////////////////////////////////////////////////////////////////////

if (isset($_POST['Sup'])) 
{
    utilisateurDAO::supprimer($_SESSION['identification']);
    unset($_SESSION['identification']);
    $_SESSION['IPSAD']="Accueil";
    header('location: index.php');
}

///////////////////////////////////////////Si il appuie sur le bouton sauvegarder/////////////////////////////////////////////////////////

if(isset($_POST['Modif'])) 
{
    //Verifie le prénom et le nom//

    if ((preg_match("#(?:[[:alpha:]]{1,30}|[-']{1})#i",($_POST['Prenom'])) &&  (preg_match("#(?:[[:alpha:]]{1,30}|[-']{1})#i",($_POST['Nom'])))))
    {}     
    else
    {
        $messageErreurPrenom="nom et/ou prénom incorrect!";
    }    

    //Vérifie l'email// 

    if(preg_match('`^[[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-.]?[[:alnum:]])*\.([a-z]{2,4})$`',($_POST['mail2']))) 
    {}
    else
    {
        $messageErreurEmail="L Email doit etre correct"; 
    }   

    //Si il veut aussi changer son mot de passe//

    if (isset($_POST['Newmdp'])) 
    {
        //Vérifie le mdp//

        if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{3,14}$/",$_POST['Newmdp'])) 
        {}
        else
        {
            $messageErreurMdp="le mot de passe doit etre correct!";
            $messageErreurMp="Le mot de passe doit avoir 1 majuscule, minuscule, chiffre, caractère spécial et contenir au total 5 caractères minimums et 14 maximum";
        }

        //Si l'ancien mdp est correct//

        $md5 = hash('sha256', $_POST['mdp'] . UtilisateurDAO::sel($_POST['mail2']));

        if ($md5==$utilisateur->getMdp())     
        {}
        else                                                                                  
        {
            $messageErreurModif = "Ancien mot de passe est incorrect";
        }
    }

    //Si il veut changer ses informtions sans le mdp//

    if ($messageErreurEmail=='' && $messageErreurModif=='' && $messageErreurPrenom=='' && !isset($_POST['Newmdp'])) 
    {
        $utilisateur2 = new utilisateur($_POST['mail2'], $utilisateur->getMdp());

        //Verifie si le compte n'exite pas deja//

        if (utilisateurDAO::verificationMail($_POST['mail2'])=="" || $utilisateur->getMail()==$_POST['mail2'])
        {  
            utilisateurDAO::Modifier($_POST['Nom'],$_POST['Prenom'],$_POST['mail2'],$utilisateur->getId());   

            $_SESSION['identification']->setMail($_POST['mail2']);
            header('location: index.php');  
            exit;
        }
        else
        {
            $messageErreurCompte="Ce compte existe déja!";
        }
    }   //Si il veut changer egalement le mdp//
    else if ($messageErreurEmail=='' && $messageErreurModif=='' && $messageErreurPrenom=='' && $messageErreurMdp=='' && isset($_POST['Newmdp']))
    {
        $utilisateur3 = new utilisateur($_POST['mail2'],  $utilisateur->getMdp());

        //Verifie si le compte n'exite pas deja//

        if (utilisateurDAO::verificationMail($_POST['mail2'])=="" || $utilisateur->getMail()==$_POST['mail2'])
        {
            utilisateurDAO::Modifier2($_POST['Nom'],$_POST['Prenom'],$_POST['mail2'],$utilisateur->getId(),$_POST['Newmdp'] . UtilisateurDAO::sel($_POST['mail2']));      
            $_SESSION['identification']->setMail($_POST['mail2']);
            header('location: index.php');  
            exit;
        }
        else
        {
            $messageErreurCompte="Ce compte existe déja!";
        }
    }
}

//Permet de ne pas re-remplir les champs pour afficher l'erreur//

if ($messageErreurPrenom!="")
{
    $Prenom="";
    $nom="";
}
else  
{
    $Prenom=$utilisateur->getPrenom();
    $nom=$utilisateur->getNom();
}

if($messageErreurEmail!="")
{
    $Mail="";
}
else{
    $Mail= $utilisateur->getMail();
}

//////////////////////////////////////////////////DEBUT FORMULAIRE////////////////////////////////////////////////////////////////////////////

$formulaireCompteTop = new Formulaire('post', 'index.php', 'fCompteTop', 'fCompteTop');

$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->debutDiv("TopCompte"));

	$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->debutDiv("TopCompteTexte"));
		$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->creerLabel("Titre","Titre","Mot de passe oublié?"));
	$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->finDiv());


	$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->debutDiv("TopCompteLogo"));
		$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->creerImage("../IPSAD/images/Management.svg"));
	$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->finDiv());

$formulaireCompteTop->ajouterComposantLigne($formulaireCompteTop->finDiv());


$formulaireCompteTop->ajouterComposantTab();
$formulaireCompteTop->creerFormulaire();

//Formulaire des informations du compte//

$formulaireCompte = new Formulaire('post', 'index.php', 'fCompte', 'fCompte');

$formulaireCompte->ajouterComposantLigne($formulaireCompte->creerTitre('Mes informations',"1",""));

$formulaireCompte->ajouterComposantTab();

$formulaireCompte->ajouterComposantLigne($formulaireCompte->debutDiv("contentfCompte"));
    $formulaireCompte->ajouterComposantLigne($formulaireCompte->debutDiv("GaucheFormulaireCompte"));
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerLabel("","",'Prenom'));	      
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerInputTexte('Prenom', 'Prenom',$Prenom , 0,$messageErreurPrenom, ''));
        $formulaireCompte->ajouterComposantTab();
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerLabel("","",'Nom'));
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerInputTexte('Nom', 'Nom',$nom, 1, $messageErreurPrenom, ''));
        $formulaireCompte->ajouterComposantTab();
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerLabel("","",'Email'));
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerInputTexte('mail2', 'mail2',$Mail, 1, $messageErreurEmail, ''));
        $formulaireCompte->ajouterComposantTab();

        //Si il veut changer de mot de passe//

        if(isset($_POST['Changer']) || isset($_POST['Modif']) && isset($_POST['Newmdp']))
        {
            $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerLabel("","",' Ancien Mot de Passe'));
            $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerInputMdp('mdp', 'mdp',  1, $messageErreurModif, ''));
            $formulaireCompte->ajouterComposantTab();

            $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerLabel("","",'Nouveau Mot de Passe'));
            $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerInputMdp('Newmdp', 'Newmdp',  1, $messageErreurMdp, ''));
            $formulaireCompte->ajouterComposantTab();
        }

   
    $formulaireCompte->ajouterComposantLigne($formulaireCompte->finDiv());
    $formulaireCompte->ajouterComposantLigne($formulaireCompte->debutDiv("DroiteFormulaireCompte"));

        if(!isset($_POST['Changer']))
        {
            $formulaireCompte->ajouterComposantLigne($formulaireCompte-> creerInputSubmit('Changer', 'Changer', 'Modifier MDP'));
        }

        $formulaireCompte->ajouterComposantLigne($formulaireCompte-> creerInputSubmit('Sup', 'Sup', 'Supprimer', 'return confirm("Voulez-vous vraiment supprimer votre compte ?");'));
        $formulaireCompte->ajouterComposantLigne($formulaireCompte-> creerInputSubmit('Modif', 'Modif', 'Sauvegarder'));
        $formulaireCompte->ajouterComposantTab();

        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerMessage($messageErreurCompte));    
        $formulaireCompte->ajouterComposantLigne($formulaireCompte->creerMessage($messageErreurMp));
        $formulaireCompte->ajouterComposantTab();
    $formulaireCompte->ajouterComposantLigne($formulaireCompte->finDiv());
$formulaireCompte->ajouterComposantLigne($formulaireCompte->finDiv());

$formulaireCompte->creerFormulaire();

/////////////////////////////////////////////////////////////FIN FORMULAIRE/////////////////////////////////////////////////////////////////////

require_once 'vue/vueMonCompte.php' ;
?>