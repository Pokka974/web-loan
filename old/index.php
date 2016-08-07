<?php
include "entete.php";
include "h1nav.php";
error_reporting(E_ALL);
echo entete("Institut de beauté Loan");
echo headernav("Institut de beauté Loan");
?>
    <div class="contenu">
        <div id="informations">
            <div id="adresse">
                <p>
                    Adresse: 26 Rue de la Bruyère, 75009 Paris <br />
                    Métro 12 - Trinité ou Saint Georges <br />
                    Téléphone: 01 48 74 98 61 <br />
                    Email : contact@institutbeauteloan.com
                </p>
            </div>

        <div id="horaires">
                <p>
                    Horaires: <br /> <br />
                    Lundi fermé <br /> <!--Insérer un "horaire aujourd'hui" (script php/js)-->
                    Mardi à Samedi ouvert, de 9:30 à 18:30 <br />
                </p>
            </div>
        </div>

        <div id="slogan">
            <p>
                Texte à insérer <!-- PENSER A INSERER LE PARTENARIAT AVEC MARY COHR -->
            </p>
        </div>
    </div>
</body>
</html>