<?php

////////////////////////////////////DEBUT FORMULAIRE////////////////////////////////////////////

$formulaireGestion = new Formulaire('post', 'index.php', 'fGestion', 'fGestion');

////////////////////////////////////////PARTIE HAUTE////////////////////////////////

$formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("topGestion"));

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("topGestion2"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Gestion de vos actifs est suivie de vos épreuves"));
    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("topGestion2Texte"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Nous vous apporterons une un support et des connaissances pour améliorer votre gestion", 2));
    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("topGestion2Fleche"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerLabelLink2("ct-btn-scroll ct-js-btn-scroll","Fleche","#AntiBug","","","","images/ArrowDown.png"));
    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

$formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

//Anti bug pour la fleche//

$formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("AntiBug"));
$formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

/////////////////////////////PARTIE MID///////////////////////////////////////////////

$formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestion"));

    //4 block slide//

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDivAos("MidGestionBlock3","flip-down"));

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionTexte2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Pilotez votre budget d'exploitation, d'investissement", 2));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionImage2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerImage("images/money.svg"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDivAos("MidGestionBlock2","fade-up"));

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionImage2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerImage("images/Gestion.png"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionTexte2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Obtenez un suivi et une expertise pour améliorer votre gestion."));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDivAos("MidGestionBlock3","fade-down"));

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionTexte2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Obtenez un suivi et une expertise pour améliorer votre gestion."));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());
        
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionImage2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerImage("images/Gestion3.png"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDivAos("MidGestionBlock2","fade-up"));

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionImage2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerImage("images/Gestion4.svg"));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionTexte2"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Obtenez un suivi et une expertise pour améliorer votre gestion."));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDivAos("MidGestionBlock4","fade-down"));

        $formulaireGestion->ajouterComposantLigne($formulaireGestion->debutDiv("MidGestionTexte4"));
            $formulaireGestion->ajouterComposantLigne($formulaireGestion->creerTitre("Nous ne sommes pas simplement des «développeurs autonomes», tous nos processus sont basés sur un processus Agile SCRUM, et nos PM parleront le langage des affaires avec vous, orientant l'équipe vers vos objectifs commerciaux."));
        $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

    $formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

$formulaireGestion->ajouterComposantLigne($formulaireGestion->finDiv());

$formulaireGestion->ajouterComposantTab();
$formulaireGestion->creerFormulaire();

require_once 'vue/vueGestion.php' ;