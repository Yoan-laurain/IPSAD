<?php

$_SESSION['listeAvis'] = new  lesAvis(AvisDAO::lesAvisActif());
$i=0;

if(isset($_POST["Avis"]))
{
    header('location: index.php?IPSAD=Avis'); 
    exit;
}

$formulaireClient = new Formulaire('post', 'index.php', 'fClient', 'fClient');

$formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClient"));

    $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientTexte"));
        $formulaireClient->ajouterComposantLigne($formulaireClient->creerTitre("Qui de mieux que nos clients pour parler de nous?", 2));
    $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

    $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientAvis"));

        $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientLabel"));
            $formulaireClient->ajouterComposantLigne($formulaireClient->creerLabel("","","Vous êtes client et vous souhaitez donner votre avis . Remplissez ce court formulaire!"));
        $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

        $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientButton"));
            $formulaireClient->ajouterComposantLigne($formulaireClient->creerInputSubmit("Avis","Avis","C'est parti!",""));
        $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

    $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

    foreach ($_SESSION['listeAvis']->getlesAvis() as $unAvis)
    {
        if($i%2==0)
        {
            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientBlock"));

            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDivAos("MidClientBlockGauche","fade-right"));
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientImage"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerImage("images/".$unAvis->getLogo()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientLabel"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerLabel("","",$unAvis->getActivite()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDivAos("MidClientBlockDroite","fade-left"));
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientLabel"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerLabel("","",$unAvis->getLibelle()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
        }
        else
        {

            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientBlock"));

            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDivAos("MidClientBlockGauche2","fade-right"));
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientLabel"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerLabel("","",$unAvis->getLibelle()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->debutDivAos("MidClientBlockDroite2","fade-left"));
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientImage"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerImage("images/".$unAvis->getLogo()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
                $formulaireClient->ajouterComposantLigne($formulaireClient->debutDiv("MidClientLabel"));
                    $formulaireClient->ajouterComposantLigne($formulaireClient->creerLabel("","",$unAvis->getActivite()));
                $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
    
            $formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());
        }
        $i++;
    }

$formulaireClient->ajouterComposantLigne($formulaireClient->finDiv());

$formulaireClient->ajouterComposantTab();
$formulaireClient->creerFormulaire();


require_once 'vue/vueClient.php' ;