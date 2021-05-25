<?php
////////////////////////////////////SAISON////////////////////////////////////////////

//////////////BOUTON SAUVEGARDER//////////////////

if(isset($_POST['submitParamSaison']) && $_POST['submitParamSaison'])
{
    if(isset($_POST['OptionSaison']))
    {
        $_SESSION['script']=SaisonDAO::lire($_POST['OptionSaison']);
        SaisonDAO::ChangerSaisons($_POST['OptionSaison']);
    }
    else if (isset($_POST['Saison']) && isset($_POST['script']))
    {
        $_SESSION['script']=$_POST['script'];
        SaisonDAO::ChangerSaisons($_POST['Saison']);
    }
}

/////////////BOUTON AJOUT///////////////////

if(isset($_POST['AjoutSaison']))
{
    SaisonDAO::ajouter($_POST['Saison'],$_POST['script']);
}
   

///////////////////BOUTON SUPPRIMER///////////////////

if((isset($_POST['SuppSaison']) && $_POST['SuppSaison']))
{
    SaisonDAO::supprimer($_POST['OptionSaison']);
}

////////////////////////////////FIN SAISON//////////////////////////////////////////////////////////

////////////////////////////////////PARTENAIRES////////////////////////////////////////////

///////////////////BOUTON SUPPRIMER///////////////////

if((isset($_POST['SuppPartenaire']) && $_POST['SuppPartenaire']))
{
    PartenaireDAO::supprimer($_POST['optionsPartenaires']);
}

/////////////BOUTON AJOUT///////////////////

if(isset($_POST['AjoutPartenaire']))
{
    PartenaireDAO::ajouter($_POST['LibellePartenaire'],$_FILES['Pjointes']['name']);

    require_once 'lib/upload.php';
}

////////////////////////////////////FIN PARTENIARES////////////////////////////////////////////


///////////////////////////////MESSAGE//////////////////////////////////////////////////////////////

///////////////SAUVEGARDER/////////////

if(isset($_POST['SaveMessage']))
{
    if($_POST['TexteMessage']!='')
    {
        MessageDAO::ChangerMessage($_POST['TexteMessage']);
    }

    if($_POST['TexteMessage2']!='')
    {
        MessageDAO::ChangerMessage2($_POST['TexteMessage2']);
    }

    $_SESSION['Message']=$_POST['TexteMessage'];
}

///////////////////////////////FIN MESSAGE///////////////////////////////////////////////////////////

/////////////////////////////////////////DEBUT FORMULAIRE//////////////////////////////////////////////////////////

$Param = new Formulaire('post', 'index.php', 'fParam', 'fParam','multipart/form-data');

$Param->ajouterComposantLigne($Param->creerTitre("Saison","2",''));

$Param->ajouterComposantLigne($Param->debutDiv("contentParam"));

    $Param->ajouterComposantLigne($Param->creerLabel("","",'Nom'));

    //APPUIE DU BOUTON MODIFIER SAISON//

    if(isset($_POST['ChargerSaison']))
    {
        //Récupere les saisons de la bd//

        $script = new Saisons(SaisonDAO::lesSaisons());
        $Liste=$script->getSaisons();
        $options=array();

        //Recup le libelle de toutes les saisons//

        foreach($Liste as $saison)
        {
            array_push($options,$saison->getLibelle());
        }

        //Affichage des boutons/listedéroulante//

        $Param->ajouterComposantLigne($Param->creerSelect("OptionSaison","OptionSaison",$options,1));
        $Param->ajouterComposantLigne($Param-> creerInputSubmit('AnnulerSaison', 'AnnulerSaison', 'Annuler')); 
        $Param->ajouterComposantLigne($Param-> creerInputSubmit('SuppSaison', 'SuppSaison', 'Supprimer', 'return confirm("Voulez-vous vraiment supprimer le thème ?");')); 
        $Param->ajouterComposantLigne($Param-> creerInputSubmit('submitParamSaison', 'submitParamSaison', 'Sauvegarder'));  
        $Param->ajouterComposantLigne($Param->finDiv());
    }
    else
    {
        //BOUTON+LABEL//

        $Param->ajouterComposantLigne($Param->creerInputTexte('Saison', 'Saison', '', 0, '', ''));
        $Param->ajouterComposantLigne($Param-> creerInputSubmit('ChargerSaison', 'ChargerSaison', 'Changer de saison'));
           
        $Param->ajouterComposantLigne($Param->finDiv());
        $Param->ajouterComposantLigne($Param->debutDiv("contentParam"));
            $Param->ajouterComposantLigne($Param->creerLabel("Script","Script",'Script'));
            $Param->ajouterComposantLigne($Param->creerInputTexte('script', 'script', '', 0, '', ''));
            $Param->ajouterComposantLigne($Param-> creerInputSubmit('AjoutSaison', 'AjoutSaison', 'Ajouter'));
        $Param->ajouterComposantLigne($Param->finDiv());
    }
    
    //MESSAGE//

    $Param->ajouterComposantLigne($Param->creerTitre("Message Défilant","2",''));
    $Param->ajouterComposantLigne($Param->debutDiv("contentParam"));
        $Param->ajouterComposantLigne($Param->creerLabel("Message","Message",'Texte'));
        $Param->ajouterComposantLigne($Param->creerInputGrandTexte("TexteMessage","TexteMessage","",0,"",""));     
        $Param->ajouterComposantLigne($Param-> creerInputSubmit('SaveMessage', 'SaveMessage', 'Sauvegarder')); 
    $Param->ajouterComposantLigne($Param->finDiv());

    $Param->ajouterComposantLigne($Param->debutDiv("contentParam2"));
        $Param->ajouterComposantLigne($Param->creerLabel("Message","Message",'Texte2'));
        $Param->ajouterComposantLigne($Param->creerInputGrandTexte("TexteMessage2","TexteMessage2","",0,"",""));     
    $Param->ajouterComposantLigne($Param->finDiv());



    ////////////////////////////////////////////////////////PARTENAIRES//////////////////////////////////////////////

    //Récup les parteniares de la bdd//

    $LesPartenaires = new Partenaires(PartenaireDAO::lesPartenaires());
    $ListePartenaires=$LesPartenaires->getPartenaires();

    $optionsPartenaires=array();

    //Affiche leur libelle//

    foreach($ListePartenaires as $Partenaire)
    {
        array_push($optionsPartenaires,$Partenaire->getLibelle());
    }

    $Param->ajouterComposantLigne($Param->creerTitre("Partenaires","2",''));

    $Param->ajouterComposantLigne($Param->debutDiv("contentParamPartenaire"));

        $Param->ajouterComposantLigne($Param->debutDiv("contentParamGauche"));

            //LABEL+ZONE INPUT LIBELLE//

            $Param->ajouterComposantLigne($Param->debutDiv("block"));
                $Param->ajouterComposantLigne($Param->creerLabel("","",'Nom'));
                $Param->ajouterComposantLigne($Param->creerInputTexte('LibellePartenaire', 'LibellePartenaire', '', 0, '', ''));
            $Param->ajouterComposantLigne($Param->finDiv());

            //LABEL + INPUT FILE//

            $Param->ajouterComposantLigne($Param->debutDiv("block"));
                $Param->ajouterComposantLigne($Param->creerLabel("","",'Image'));
                $Param->ajouterComposantLigne($Param->creerInputFile('Pjointes', 'Pjointes'));
            $Param->ajouterComposantLigne($Param->finDiv());

            //LABEL+LISTE DEROULANTE//

            $Param->ajouterComposantLigne($Param->debutDiv("block"));
                $Param->ajouterComposantLigne($Param->creerLabel("","",'Partenaire'));
                $Param->ajouterComposantLigne($Param->creerSelect("optionsPartenaires","optionsPartenaires",$optionsPartenaires,1));
            $Param->ajouterComposantLigne($Param->finDiv());

        $Param->ajouterComposantLigne($Param->finDiv());

        //BOUTONS//

        $Param->ajouterComposantLigne($Param->debutDiv("contentParamDroite"));
            $Param->ajouterComposantLigne($Param-> creerInputSubmit('AjoutPartenaire', 'AjoutPartenaire', 'Ajouter'));
            $Param->ajouterComposantLigne($Param-> creerInputSubmit('SuppPartenaire', 'SuppPartenaire', 'Supprimer', 'return confirm("Voulez-vous vraiment supprimer le partenaire ?");')); 
        $Param->ajouterComposantLigne($Param->finDiv());

    $Param->ajouterComposantLigne($Param->finDiv());

    ////////////////////////////////////////////////////////PARTENAIRES//////////////////////////////////////////////
$Param->ajouterComposantLigne($Param->finDiv());

$Param->ajouterComposantTab();
$Param->creerFormulaire();

require_once 'vue/vueAdmin.php' ;