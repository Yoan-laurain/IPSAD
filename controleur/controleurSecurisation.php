<?php

///////////////////////////////////////DEBUT FORMULAIRE////////////////////////////////////////////////////

$formulaireSecurisation = new Formulaire('post', 'index.php', 'fSecurisation', 'fSecurisation');

////////////////////////////////////////////////////PARTIE HAUTE///////////////////////////////////////////

$formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("topSecurisation"));

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("topSecurisation2"));
        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Securisation de vos actifs est suivie de vos épreuves"));
    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("topSecurisation2Texte"));
        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Nous vous apporterons un support et des connaissances pour améliorer votre Securisation", 2));
    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

$formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

///////////////////////////////////////////PARTIE MID//////////////////////////////////////////////////////////

$formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("ContentMidSecurisation"));

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDivAos("MidSecurisation","flip-up"));

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation1Suite"));

            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation1Titre"));
                $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Securisation de vos actifs est suivi de vos épreuves"));
            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDivAos("MidSecurisation2","flip-down"));

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation2Suite"));

            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation2Titre"));
                $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Securisation de vos actifs est suivi de vos épreuves"));
            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDivAos("MidSecurisationbis","flip-up"));

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation1Suite"));

            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisation1Titre"));
                $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Securisation de vos actifs est suivi de vos épreuves"));
            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDivAos("MidSecurisationBlock","zoom-out"));

        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->debutDiv("MidSecurisationTexteBlock"));
            $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->creerTitre("Nous ne sommes pas simplement des «développeurs autonomes», tous nos processus sont basés sur un processus Agile SCRUM, et nos PM parleront le langage des affaires avec vous, orientant l'équipe vers vos objectifs commerciaux."));
        $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

    $formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

$formulaireSecurisation->ajouterComposantLigne($formulaireSecurisation->finDiv());

$formulaireSecurisation->ajouterComposantTab();
$formulaireSecurisation->creerFormulaire();

require_once 'vue/vueSecurisation.php' ;