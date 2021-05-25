<?php

//Recup les partenaires de la bdd//

$_SESSION['listePartenaires'] = new  Partenaires(PartenaireDAO::lesPartenaires());

////////////////////////////////////////////////DEBUT FORMULAIRE/////////////////////////////////

$confiance = new Formulaire('post', 'index.php', 'fconfiance', 'fconfiance');

/////////////////////////////PARTIE HAUTE//////////////////////////

$confiance->ajouterComposantLigne($confiance->debutDiv("topConfiance"));
    $confiance->ajouterComposantLigne($confiance->debutDiv("topConfiance2"));
        $confiance->ajouterComposantLigne($confiance->creerTitre("Gestion de vos actifs est suivie de vos épreuves"));
    $confiance->ajouterComposantLigne($confiance->finDiv());
    $confiance->ajouterComposantLigne($confiance->debutDiv("topConfiance2Texte"));
        $confiance->ajouterComposantLigne($confiance->creerTitre("Nous vous apporterons un support et des connaissances pour améliorer votre gestion", 2));
    $confiance->ajouterComposantLigne($confiance->finDiv());
$confiance->ajouterComposantLigne($confiance->finDiv());

/////////////////////////PARTIE MIDD///////////////////////////////////

$confiance->ajouterComposantLigne($confiance->debutDiv("MidConfiance"));

    $confiance->ajouterComposantLigne($confiance->debutDiv("MidConfianceTitre"));
        $confiance->ajouterComposantLigne($confiance->creerTitre("Ils nous font confiance"));
    $confiance->ajouterComposantLigne($confiance->finDiv());

    $confiance->ajouterComposantLigne($confiance->debutDiv("MidconfianceBlockTexte"));
        $confiance->ajouterComposantLigne($confiance->creerLabel("","","De nombreuses entreprises et institutions nous accordent leur confiance pour gérer et accompagner leurs projets. Notre objectif est d’accompagner nos clients dans leurs démarches liées à la gestion de leur passif environnemental, au droit de leurs sites et à l’application de la réglementation.

        Voici quelques exemples de clients avec lesquels nous avons eu le plaisir de collaborer. Nous travaillons également en confidentialité pour un certain nombre de clients qui par respect contractuel ne sont pas mentionnés."));
    $confiance->ajouterComposantLigne($confiance->finDiv());

    $i=0;
    $t=1;

        //PARCOUTRS LES PARTENAIRES ET AFFICHE LEURS LOGO//

        foreach ($_SESSION['listePartenaires']->getPartenaires() as $unPartenaire)
        {
            if($i%3==0)
            {      
                $confiance->ajouterComposantLigne($confiance->debutDiv("MidConfianceBlocks"));
            }

            $confiance->ajouterComposantLigne($confiance->debutDivAos("MidConfianceBlock","flip-up"));
                $confiance->ajouterComposantLigne($confiance->creerImage("../IPSAD/images/".$unPartenaire->getImage_()));
            $confiance->ajouterComposantLigne($confiance->finDiv());
            
            if($t%3==0)
            {
                $confiance->ajouterComposantLigne($confiance->finDiv());
            }
          $t++;
          $i++;
        }

    $confiance->ajouterComposantLigne($confiance->finDiv());

$confiance->ajouterComposantLigne($confiance->finDiv());


$confiance->ajouterComposantTab();
$confiance->creerFormulaire();
require_once 'vue/vueConfiance.php' ;