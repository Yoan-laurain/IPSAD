<?php
//////////////////////////////////////////DEBUT FORPMULAIRE////////////////////////////////////////

$formulaireActivites = new Formulaire('post', 'index.php', 'fActivites', 'fActivites');

////////////////////////////////////PARTIE HAUTE//////////////////////////////////////////////////
/*
$formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("topActivites"));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("topActivites2"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Booster d'entreprises & Apporteur de solutions"));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("topActivites2Texte"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Dans un environnement en constante mutation où nos organisations sont directement impactées par les changements profonds de nos sociétés, notre défi est d’accompagner la dynamique collective des organisations, leur originalité pour trouver en elles-mêmes ses propres solutions. Des solutions qui lui permettront de conjuguer performance et création de valeur d’une part, bien-être et développement professionnel nécessaires à une réussite pérenne d’autre part", 2));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    
$formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
*/

////////////////////////////////////////PARTIE MID///////////////////////////////////////////////

//BLOCK GESTION//

$formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivites","flip-down"));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivites2"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Gestion"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexte"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Pilotez votre budget d'exploitation, d'investissement", 2));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImage"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/Outils.jpg"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
$formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

//BLOCK Anticipation//

$formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivites","flip-down"));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivites2"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Anticipation"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexte"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Anticipez vos décisions grâce à des outils de gestion simples et adaptés à vos besoins.", 2));      
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImage"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/OIP.png"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
$formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

//BLOCK Securisation//

$formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivites","flip-down"));
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivites2"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Securisation"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexte"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre("Sécurisez et gérez votre trésorerie", 2));
           
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImage"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/Dossiers.jpg"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
$formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

//Patie image+texte avec alternation//

$formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("contMidActivites"));

    //Partie Gauche Texte
            
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidctivitesGauche","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesGauche2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexteGauche"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerLabel("","","Des accompagnements dédiés et ciblés permettront également de travailler sur les sujets qui vous préoccupent."));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

    //Partie Droite Image

    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivitesDroite","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesDroite2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImageDroite"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/deal.svg"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

    //Partie Gauche Image
                
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivitesGauche","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesGauche2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImageGauche"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/up.svg"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

    //Partie Droite Texte

    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivitesDroite","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesDroite2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexteDroite"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerLabel("Besoin","Besoin","A l'écoute de vos besoins, IPSAD s'engage à faire de votre entreprise existante une entreprise performante !"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexte"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre(""));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

        //Partie Gauche Texte
            
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidctivitesGauche","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesGauche2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexteGauche2"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerLabel("Pilotage","Pilotage","En nous confiant le pilotage de la performance de votre entreprise, IPSAD sera un véritable partenaire pour sécuriser une situation, accompagner votre transformation ou encore faciliter votre prise de décisions."));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesTexte"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerTitre(""));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

    //Partie Droite Image

    $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDivAos("MidActivitesDroite","flip-up"));
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesDroite2"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->debutDiv("MidActivitesImageDroite"));
                $formulaireActivites->ajouterComposantLigne($formulaireActivites->creerImage("images/team.svg"));
            $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
        $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());
    $formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());


$formulaireActivites->ajouterComposantLigne($formulaireActivites->finDiv());

$formulaireActivites->ajouterComposantTab();
$formulaireActivites->creerFormulaire();

//////////////////////////////////////////FIN FORPMULAIRE////////////////////////////////////////

require_once 'vue/vueActivites.php' ;