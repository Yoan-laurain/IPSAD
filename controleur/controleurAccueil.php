<?php

//Récupère le message défilant de la BDD//

$_SESSION['Message']=MessageDAO::lire();
$_SESSION['Message2']=MessageDAO::lire2();

//////////////////////////////////////////DEBUT FORPMULAIRE////////////////////////////////////////

$accueil = new Formulaire('post', 'index.php', 'fAccueil', 'fAccueil','multipart/form-data');

/////////////////////////PARTIE HAUTE/////////////////////////////////

$accueil->ajouterComposantLigne($accueil->debutDiv("topAccueil"));
    $accueil->ajouterComposantLigne($accueil->debutDiv("TopLogo"));
        $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Logo2.png"));
    $accueil->ajouterComposantLigne($accueil->finDiv());
$accueil->ajouterComposantLigne($accueil->finDiv());

// 3 Block qui sommes nous etc..//

$accueil->ajouterComposantLigne($accueil->debutDivAos("ContentMidAccueil0","flip-down"));

    $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil0","flip-down"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Titre"));
            $accueil->ajouterComposantLigne($accueil->creerLabelLink("","LabelQui","https://ipsad.fr/index.php?IPSAD=QuiSommesNous","Qui sommes nous?"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Blocks"));
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockTexte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Professionnels du secteur de la gestion et de la finance d’entreprise depuis plus de 10 ans"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/AboutUs.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());
        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil0","flip-up"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("A qui s’adresse nos offres ?"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Blocks"));
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockTexte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Aux dirigeants de TPE et PME dont les besoins sont évolutifs"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Why.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());
        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil0","flip-up"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Pourquoi faire appel à nous ?"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0Blocks"));
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockTexte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Obtenez des résultats tangibles à court, moyen et long terme grâce à des actions concrètes et adaptées."));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil0BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Help.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());
        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

//Partie Etape//

$accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3"));
    $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil3Titre","fade-left"));
        $accueil->ajouterComposantLigne($accueil->creerTitre("Comment fonctionne notre équipe ?"));
    $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Blocks"));

        $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil3Block1","fade-left"));
        
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Etape1.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Etape 1","3"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Etude Préalable","5"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Texte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Nous analysons votre projet afin d’identifier l’ensemble de ses composantes."));
            $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil3Block","fade-right"));
        
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Etape2.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Etape 2","3"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Analyse – Conception","5"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Texte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Nous entrons dans le détail de chaque fonction, processus, et validons avec vous que cela correspond à vos besoins, à vos attentes."));
            $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil3Block","fade-left"));
            
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Developpement.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Etape 3","3"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Développement","5"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Texte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Nous développons les actions intégrées dans le cahier des charges précédemment établi "));
            $accueil->ajouterComposantLigne($accueil->finDiv());
        $accueil->ajouterComposantLigne($accueil->finDiv());


        $accueil->ajouterComposantLigne($accueil->debutDivAos("MidAccueil3Block","fade-right"));
            
            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3BlockLogo"));
                $accueil->ajouterComposantLigne($accueil->creerImage("../IPSAD/images/Production.svg"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Etape 4","3"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Titre"));
                $accueil->ajouterComposantLigne($accueil->creerTitre("Mise en production","5"));
            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("MidAccueil3Texte"));
                $accueil->ajouterComposantLigne($accueil->creerLabel("","","Après une série de tests et votre validation, nous mettons en œuvre vos souhaits d’autonomisation ou d’un accompagnement différencié "));
            $accueil->ajouterComposantLigne($accueil->finDiv());
        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantTab();
$accueil->creerFormulaire();

//////////////////////////////////////////fin FORPMULAIRE////////////////////////////////////////
require_once 'vue/vueAccueil.php' ;


