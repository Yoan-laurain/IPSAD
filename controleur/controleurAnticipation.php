<?php
//////////////////////////////////////DEBUT FORMULAIRE/////////////////////////////////////////////////////////////

$formulaireAnticipation = new Formulaire('post', 'index.php', 'fAnticipation', 'fAnticipation');

////////////////////////////////////PARTIE HAUTE//////////////////////////////////////////////////////////////////

$formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("topAnticipation"));

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("topAnticipation2"));
        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Anticipation de vos actifs est suivie de vos épreuves"));
    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("topAnticipation2Texte"));
        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Nous vous apporterons un support et des connaissances pour améliorer votre anticipation", 2));
    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

$formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

/////////////////////////////////////////////MILLEU/////////////////////////////////////////////////

$formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipation"));

                                            //IMAGE + TEXTE//

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationBlock0","flip-down"));

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationTexte0"));
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Des conseils de professionels sur des points critiques", 2));
        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                                            //CHIFFRES//

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock"));

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationTitre"));
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Transformation par les chiffres", 2));
        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlocks"));

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationBlock1First","flip-down"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte1"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","40%"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte2"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Retour sur investissement sur 3 ans"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationBlock1","flip-up"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte1"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","60%"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte2"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Réduction des pertes financières"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationBlock1","flip-down"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte1"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","30000€"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock1Texte2"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Économisé en moyenne"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                                            //ETAPES//

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock2"));

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationBlock2Suite","flip-up"));

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationTitre2"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Anticiper c'est économisé!", 2));
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationBlock2Texte1"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ipsam iste dolores praesentium recusandae soluta architecto harum velit aspernatur ea. Ipsa vel velit ullam ea perspiciatis rerum voluptate laudantium dolor!"));
            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlocks"));

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationSousBlocks1First","flip-up"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockImage"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerImage("images/Goals.svg"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTitre"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Repérer les points critiques", 2));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTexte"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Velit aspernatur ea. Ipsa vel velit ullam ea perspiciatis rerum voluptate laudantium dolor!"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationSousBlocks1","flip-up"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockImage"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerImage("images/Choice.svg"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTitre"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Agir et améliorer", 2));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTexte"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Velit aspernatur ea. Ipsa vel velit ullam ea perspiciatis rerum voluptate laudantium dolor!"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDivAos("MidAnticipationSousBlocks1","flip-up"));

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockImage"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerImage("images/Savings.svg"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTitre"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerTitre("Profitez de ces économies", 2));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->debutDiv("MidAnticipationSousBlockTexte"));
                    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->creerLabel("","","Velit aspernatur ea. Ipsa vel velit ullam ea perspiciatis rerum voluptate laudantium dolor!"));
                $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

            $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

        $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

    $formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());
    
$formulaireAnticipation->ajouterComposantLigne($formulaireAnticipation->finDiv());

$formulaireAnticipation->ajouterComposantTab();
$formulaireAnticipation->creerFormulaire();

//////////////////////////////////////fin FORMULAIRE/////////////////////////////////////////////////////////////

require_once 'vue/vueAnticipation.php' ;