<?php

//Accepte l'avis//

//Apuie de un boutton//
if(!empty($_POST))
{
    //Parcours tout les bouttons//
    foreach ($_POST as $name => $content)
    {
        //Récupere celui appuyé//
        if($content!="/")
        {
            if($content=="Accepter")
            {
                AvisDAO::AccepterAvis($name);
            }
            else
            {
                try{
                    unlink("../IPSAD/images/".AvisDAO::RecupImage($name));
                }
                catch(Exception $e)
                {}            
                AvisDAO::RefuserAvis($name);    
            }
        }
    }
}

$_SESSION['listeAvisInactif'] = new  lesAvis(AvisDAO::lesAvisInactif());
$i=0;

$formulaireClientModif = new Formulaire('post', 'index.php', 'fClientModif', 'fClientModif','multipart/form-data');


$formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClient"));

    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientTexte"));
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerTitre("Espace de gestion des avis client", 2));
    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());

    foreach ($_SESSION['listeAvisInactif']->getlesAvis() as $unAvis)
    {
        if($i%2==0)
        {
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientBlock"));

            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDivAos("MidClientBlockGauche","fade-right"));
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientImage"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerImage("images/".$unAvis->getLogo()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientLabel"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerLabel("","",$unAvis->getActivite()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDivAos("MidClientBlockDroite","fade-left"));
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientLabel"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerLabel("","",$unAvis->getLibelle()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
        }
        else
        {

            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientBlock"));

            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDivAos("MidClientBlockGauche2","fade-right"));
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientLabel"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerLabel("","",$unAvis->getLibelle()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());

            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDivAos("MidClientBlockDroite2","fade-left"));
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientImage"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerImage("images/".$unAvis->getLogo()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientLabel"));
                    $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerLabel("","",$unAvis->getActivite()));
                $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
        }
        $i++;
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("ContentButtonClientModif"));
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif-> creerInputSubmit($unAvis->getId(),$unAvis->getId(), 'Accepter'));
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif-> creerInputSubmit($unAvis->getId(),$unAvis->getId(), 'refuser', 'return confirm("Voulez-vous vraiment supprimer cet avis ?");')); 
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv($unAvis->getId()));
    }

    if(empty($_SESSION['listeAvisInactif']->getlesAvis()))
    {
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientTexte"));
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerTitre("Aucun nouvel avis pour le moment", 2));
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());

        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->debutDiv("MidClientMODIFImage"));
            $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->creerImage("images/empty.svg"));
        $formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());
    }

$formulaireClientModif->ajouterComposantLigne($formulaireClientModif->finDiv());

$formulaireClientModif->ajouterComposantTab();
$formulaireClientModif->creerFormulaire();

require_once 'vue/vueClientModif.php' ;