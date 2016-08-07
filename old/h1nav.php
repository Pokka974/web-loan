<?php
function headernav($title){
    return "<body>\n<h1 onclick='spookCategorie(this);'>".$title."</h1>\n
        <div id='menu'>
        <ul>
            <li><a href='index.php'>Accueil</a></li>
            <li><a href='soinsvisage.php'>Soins Visage ► </a>\n
                <ul class='list1'>\n
                    <li class='arrow'><a href='soinsvisage.php' onclick='spookIdCategorie(\"BeauteExpert\");'>Beauté Expert ►</a>
                        <ul class='list2'>\n
                            <li><a href='#' onclick='spookIdArticle(\"CatioVital\");'>Catio Vital</a></li>\n
                            <li><a href='#' onclick='spookIdArticle(\"CatioLift\");'>Catio Lift</a></li>\n
                            <li><a href='#' onclick='spookIdArticle(\"DoubleCatioVitalJeunesse\");'>Double Catio Vital Jeunesse</a></li>\n
                            <li><a href='#' onclick='spookIdArticle(\"EyeRepair\");'>Eye-Repair</a></li>\n
                        </ul>\n
                    </li>
                    <li class='arrow'><a href='#'>Beauté Essentielle ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Beauté Express</a></li>
                            <li><a href='#'>Beauté Aromatique</a></li>
                        </ul>
                    </li>\n
                    <li class='arrow'><a href='#'>Beauté Lifting ►</a>
                        <ul class ='list2'>
                            <li><a href='#'>Beauté Lifting</a></li>
                            <li><a href='#'>Peel & Lift</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Kobido</a></li>\n
                    <li class='arrow'><a href='#'>Drainage Lympho-énergétique ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Visage</a></li>
                            <li><a href='#'>Cou</a></li>
                        </ul>
                    </li>\n
                    <li class='arrow'><a href='#'>Programme sur mesure 4 semaines ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Eclat Energie</a></li>
                            <li><a href='#'>Eclaircissement</a></li>
                            <li><a href='#'>Jeunesse Anti Taches</a></li>
                            <li><a href='#'>Pureté Natité</a></li>
                            <li><a href='#'>Lift Fermeté</a></li>
                        </ul>
                    </li>\n
                    <li class='arrow'><a href='#'>Maquillage ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Maquillage Jour</a></li>
                            <li><a href='#'>Maquillage Soir</a></li>
                            <li><a href='#'>Maquillage Marié</a></li>
                            <li><a href='#'>Cours d'auto maquillage</a></li>
                        </ul>
                    </li>
                    <li class='arrow'><a href='#'>Teinture Cils ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Teinture Cils</a></li>
                            <li><a href='#'>Teinture Sourcils</a></li>
                            <li><a href='#'>Teinture Cils et Sourcils</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Rehaussement des cils</a></li>\n
                </ul>\n
            </li>
            <li><a href='soinscorps.php'>Soins Corps ►</a>
                <ul class='list1'>\n
                    <li class='arrow'><a href='#'>Soins ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Gommage Corps + Hydratation</a></li>
                            <li><a href='#'>Gommage Corporel & Modelage</a></li>
                            <li><a href='#'>Jambes légères</a></li>
                            <li><a href='#'>Reflexologie plantaire esthétique</a></li>
                            <li><a href='#'>Gommage dos + Modelage Dos relax</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Soins Minceur</a></li>\n
                    <li class='arrow'><a href='#'>Détente ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Modelage Californien</a></li>
                            <li><a href='#'>Modelage à la bougie</a></li>
                            <li><a href='#'>Modelage aux pierres chaudes</a></li>
                            <li><a href='#'>Modelage spécial</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Modelage du ventre</a></li>\n
                </ul>\n
            </li>
            <li><a href='mainsetpieds.php'>Mains et Pieds ►</a>
                <ul class='list1'>\n
                    <li><a href='#'>Beauté des mains</a></li>\n
                    <li><a href='#'>Beauté des pieds</a></li>\n
                    <li><a href='#'>Forfait mains + Pieds</a></li>\n
                    <li><a href='#'>Beauté des mains + Pose du vernis semi permanent</a></li>\n
                    <li><a href='#'>Forfait Mains + Pieds avec vernis semi permanent</a></li>\n
                    <li><a href='#'>Pose de vernis simple</a></li>\n
                </ul>\n
            </li>
            <li><a href='epilation.php'>Epilation ►</a>
                <ul class='list1'>\n
                    <li><a href='#'>Sourcils</a></li>\n
                    <li><a href='#'>Lèvres, menton</a></li>\n
                    <li><a href='#'>Visage Complet</a></li>\n
                    <li><a href='#'>Aisselles</a></li>\n
                    <li><a href='#'>Demi-bras</a></li>\n
                    <li><a href='#'>Bras</a></li>\n
                    <li><a href='#'>Maillot simple</a></li>\n
                    <li><a href='#'>Brésilien</a></li>\n
                    <li><a href='#'>Semi-intégral</a></li>\n
                    <li><a href='#'>Intégral</a></li>\n
                    <li><a href='#'>Demi-jambes</a></li>\n
                    <li><a href='#'>Jambes entières</a></li>\n
                    <li><a href='#'>Cuisses</a></li>\n
                    <li><a href='#'>Epilation avec produit longue durée</a></li>\n
                    <li class='arrow'><a href='#'>Forfaits Epilations ►</a>
                        <ul class='list2'>
                            <li><a href='#'>A-JE-Maillot Brésilien</a></li>
                            <li><a href='#'>A-JE-Maillot Intégral</a></li>
                            <li><a href='#'>A-1/2-Maillot Brésilien</a></li>
                            <li><a href='#'>A-1/2-Maillot Intégral</a></li>
                        </ul>
                    </li>\n
                </ul>\n
            </li>
            <li><a href='maquillage.php'>Maquillage Perm. ►</a>
                <ul class='list1'>\n
                    <li><a href='#'>Sourcils</a></li>\n
                    <li class='arrow'><a href='#'>Eyeliner ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Supérieur</a></li>
                            <li><a href='#'>Inférieur</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Yeux complets</a></li>\n
                    <li class='arrow'><a href='#'>Intensificat° des cils ►</a>
                        <ul class='list2'>
                            <li><a href='#'>Inférieur ou Supérieur</a></li>
                            <li><a href='#'>Inférieur et Supérieur</a></li>
                        </ul>
                    </li>\n
                    <li><a href='#'>Contour des lèvres seul</a></li>\n
                    <li><a href='#'>Contour des lèvres + dégradé</a></li>\n
                    <li><a href='#'>Grain de beauté</a></li>\n
                    <li><a href='#'>Tatouage artistique</a></li>\n
                    <li><a href='#'>Cicatrice</a></li>\n
                    <li><a href='#'>Séance supplémentaire</a></li>\n

                </ul>\n
            </li>
            <li><a href='tarif.php'>Tarifs</a></li>
            <li><a href='#'>Contact</a></li>
        </ul>\n
        </div>\n";
}
?>