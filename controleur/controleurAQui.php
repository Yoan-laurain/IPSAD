<?php

$AQui = new Formulaire('post', 'index.php', 'fAQui', 'ffAQui','multipart/form-data');

//TITRE//

$AQui->ajouterComposantLigne($AQui->debutDiv("Accueil5Titre"));

    $AQui->ajouterComposantLigne($AQui->creerTitre("ACCOMPAGNER"));

    $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil5TitreCouleur"));
        $AQui->ajouterComposantLigne($AQui->creerTitre("LES DIRIGEANTS"));
    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

//Intro//

$AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiTexte"));
    $AQui->ajouterComposantLigne($AQui->creerLabel("","","L’accompagnement de dirigeants est une forme spécifique de coaching : très concret, il vise à obtenir des résultats tangibles à long-terme comme à court-terme. Prendre du recul, analyser, préparer, confronter, imaginer d’autres options, optimiser les attitudes et les décisions… les objectifs de cet accompagnement sont précis et débouchent sur des plans d’action clairs, concrets qui sont plus rapidement mis en place, avec un retour sur investissement généralement très court.​"));
$AQui->ajouterComposantLigne($AQui->finDiv());

//S'adresse a vous..//

$AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiTitre","fade-right"));

    $AQui->ajouterComposantLigne($AQui->creerTitre("Chef d’entreprise, cadre supérieur ou responsable."));

    $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiTitreCouleur"));
        $AQui->ajouterComposantLigne($AQui->creerTitre(" le coaching de dirigeants s’adresse à vous."));
    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

//IMAGE+TEXTE//

$AQui->ajouterComposantLigne($AQui->debutDiv("Accueill8Block"));

    $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil8Blocks"));

        $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAccueil8BlocksTexte","fade-right"));

            $AQui->ajouterComposantLigne($AQui->debutDiv("MidAccueil8BlockTexte"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Le dirigeant dispose d’une large capacité de décision, d’une liberté d’action étendue. Un pouvoir qui a son revers : arbitrer, décider, trancher peuvent vite devenir des contraintes quand c’est vers le dirigeant que chacun se tourne pour régler problèmes et tensions."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDiv("MidAccueil8BlockTexte"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Le dirigeant est présent sur toutes les facettes de son entreprise, de son organisation, de son service. Et présent aussi dans les relations avec l’extérieur, avec les autres parties-prenantes. D’où l’importance du nombre et de la complexité des problématiques auxquelles il est confronté."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueill8BlockImage","fade-left"));
            $AQui->ajouterComposantLigne($AQui->creerImage("images/lead2.svg"));
        $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil8Blocks"));

        $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueill8BlockImage","fade-right"));
            $AQui->ajouterComposantLigne($AQui->creerImage("images/lead.svg"));
        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAccueil8BlocksTexte","fade-left"));

            $AQui->ajouterComposantLigne($AQui->debutDiv("MidAccueil8BlockTexte"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Le dirigeant a un rapport au temps particulier, avec une tension permanente entre l’urgent et l’important. Garant de la vision long-terme, le dirigeant se trouve en même temps exposé à mille urgences du quotidien"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDiv("MidAccueil8BlockTexte"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Le dirigeant est responsable de son organisation, responsable pour les hommes et les femmes qui y travaillent. Une responsabilité qui participe de la dignité et de la grandeur de la mission. Mais un poids aussi sur la personne du dirigeant, dont chaque erreur impacte largement au-delà de lui-même."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());
    
    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

//Grâce au coaching le dirigeant va pouvoir agir à plusieurs niveaux//

$AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiTitre","fade-left"));

    $AQui->ajouterComposantLigne($AQui->creerTitre("Grâce au coaching"));

    $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiTitreCouleur"));
        $AQui->ajouterComposantLigne($AQui->creerTitre("le dirigeant va pouvoir agir à plusieurs niveaux"));
    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

//5 BLOCK CHALLENGE//

$AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlocks"));

    $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock"));

        $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock1"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Image","fade-right"));
                $AQui->ajouterComposantLigne($AQui->creerImage("images/meditation.svg"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Texte","fade-left"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Prendre du recul sur sa propre situation, sortir de l’urgence du quotidien pour prendre le temps d’aborder les questions de long terme, pour soi-même, son équipe ou l’organisation."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock1"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Image","fade-right"));
                $AQui->ajouterComposantLigne($AQui->creerImage("images/Increase.svg"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Texte","fade-left"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Apprendre à mieux se connaître, identifier et développer ses ressources, repérer et dépasser ses freins (analyses de personnalités TMA, Management Drives)"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock1"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Image","fade-right"));
                $AQui->ajouterComposantLigne($AQui->creerImage("images/challenge.svg"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Texte","fade-left"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Se faire challenger sur ses croyances, ses options, ses décisions, afin d’en éprouver la robustesse, et envisager d’autres voies."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock2"));

        $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock1"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Image","fade-right"));
                $AQui->ajouterComposantLigne($AQui->creerImage("images/skills.svg"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Texte","fade-left"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Acquérir de nouvelles compétences, mettre en œuvre de nouvelles méthodes, de nouveaux outils, de manière fiable."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("MidAQuiBlock1"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Image","fade-right"));
                $AQui->ajouterComposantLigne($AQui->creerImage("images/energie.svg"));
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("MidAQuiBlock1Texte","fade-left"));
                $AQui->ajouterComposantLigne($AQui->creerLabel("","","Relâcher la pression, retrouver de l’énergie en se faisant épauler, en sortant de la solitude du dirigeant."));
            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

//6 ETAPES//

$AQui->ajouterComposantLigne($AQui->debutDiv("Accueill6Block"));

    $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil5Titre"));

        $AQui->ajouterComposantLigne($AQui->creerTitre("Notre méthode tient"));

        $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil5TitreCouleur"));
            $AQui->ajouterComposantLigne($AQui->creerTitre("généralement en 6 étapes"));
        $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block1"));

        $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlock"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-left"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Se fixer"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("des objectifs concrets"));
                $AQui->ajouterComposantLigne($AQui->finDiv());
                
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-right"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Prendre du recul,"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("de la hauteur"));
                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2"));

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step1.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Les objectifs peuvent être aussi bien personnels (leadership, management, gestion du stress, intelligence émotionnelle ou relationnelle…) que liés à l’organisation (gestion du changement, développement de la performance, passage d’une étape importante, résolution de difficultés…)."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step2.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Pour avoir un regard plus ouvert, identifier et gérer ses émotions, penser long-terme, prendre en compte la situation dans sa globalité et ne pas hésiter à chercher des solutions originales, « out of the box ». Une démarche hautement facilitée par l’accompagnement du coach-dirigeant."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());
            
        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlock"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-left"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Prendre conscience"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("des ressources et des freins"));
                $AQui->ajouterComposantLigne($AQui->finDiv());
                
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-right"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Imaginez de "));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("nouvelles manières de faire"));
                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2"));

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step3.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Identifier en soi-même et dans son environnement les ressources mobilisables au regard des objectifs, prendre conscience des freins, des blocages potentiels. Progresser dans la confiance en soi, retrouver l’envie d’aller de l’avant, diminuer son stress, développer son efficience : autant de démarches auxquelles nos coachs professionnels sont formés."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step4.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Au regard des objectifs visés, et en conscience des ressources et obstacles, concevoir différentes options, en envisager leur faisabilité et leur pertinence, pour choisir la meilleure et dresser un plan d’actions précis. Là encore, une démarche hautement facilitée par l’accompagnement de nos coachs-dirigeants expérimentés."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());
        
        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlock"));

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-left"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Mettre en oeuvre en visant "));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("l'excellence opérationnelle"));
                $AQui->ajouterComposantLigne($AQui->finDiv());
                
            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDivAos("AQuiBlock1","fade-right"));

                $AQui->ajouterComposantLigne($AQui->creerTitre("Donner du sens à"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("AQuiBlockCouleur"));
                    $AQui->ajouterComposantLigne($AQui->creerTitre("l’action et célébrer les résultats"));
                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->finDiv());

        $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2"));

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step5.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Une bonne idée ne vaut guère sans une mise en œuvre excellente. Nous vous accompagnons pas à pas dans la réalisation opérationnelle du plan d’actions, l’apprentissage des nouveaux comportements, la mise en place des nouvelles organisations, pour en sécuriser et optimiser chaque étape."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block3"));

                $AQui->ajouterComposantLigne($AQui->debutDiv("Accueil6Block2Image"));

                    $AQui->ajouterComposantLigne($AQui->creerImage("../IPSAD/images/step6.svg"));

                $AQui->ajouterComposantLigne($AQui->finDiv());

                $AQui->ajouterComposantLigne($AQui->debutDivAos("Accueil6Block2Texte","fade-right"));

                    $AQui->ajouterComposantLigne($AQui->creerLabel("","","Dans une nouvelle démarche de prise de recul, prendre le temps de mesurer le chemin parcouru ; en entreprise, de communiquer sur la stratégie et les objectifs. Et de célébrer les résultats obtenus, avec ses équipes, ses proches … ou simplement avec soi-même, en pleine conscience."));

                $AQui->ajouterComposantLigne($AQui->finDiv());

            $AQui->ajouterComposantLigne($AQui->finDiv());
    
        $AQui->ajouterComposantLigne($AQui->finDiv());

    $AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantLigne($AQui->finDiv());

$AQui->ajouterComposantTab();
$AQui->creerFormulaire();

require_once 'vue/vueAQui.php' ;