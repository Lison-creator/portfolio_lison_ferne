<!-- Structure:

Section 1(100vh): contient le #portfolio artistique
    Float: 
        - div 1: bloc noir de contact
        - div 2: la ligne du temps avec les images (dans des div séparées)
    
Section 2(100vh): Contient la page "#A propos" (en float avec la div 3 de la page "Formation")
    1 div pour chaque image-texte cliquable ("Contact", Art, Formation, Dev)
    1 div pour l'image profil
    1 div pour le panneau déroulant "Contact"

Section 3(100vh): Page Formation (float avec la div "A propos")

Section 4: #Developpement Web
    2 div à 100vh chacune
        div 1: #Compétences
            1 div pour le panneau déroulant "Contact"
            1 div pour les blocs cliquables de compétences
            1 div pour le fil d'ariane (à droite)
            1 div pour le lien vers la partie suivante (Portfolio)
        div 2: #Portfolio
            1 div menu à gauche
            1 div blocs cliquables du portfolio
            1 div pour le fil d'ariane (à droite)
            1 div pour le lien vers la page "A propos"

            href="#background"
    -->



<!-- --------------- PAGE PORTFOLIO ARTISTIQUE --------------- -->
<section id="portfolioArtistique">
    <!-- ////////////// Bloc noir de contact ////////////// -->

    <!-- Div qui fait flotter le bloc noir contact et la ligne du temps -->
    <div class="flex">
        <div id="blocContactPortfolioArtistique" class="">
            <div class="flex contenantCarteContactPortfolioArtistique">
                <div id="icones">
                    <div class="flex flex-direction-column">
                        <!-- flotter à gauche -->
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-wix"></i>
                        <i class="fab fa-tumblr"></i>
                    </div>
                </div>
                <aside id="recompenses">
                    <i class="fas fa-award"></i>
                    <h2>Récompenses</h2>
                    <span>2020</span>
                    <p><a target="blank" href="http://www.assoartemisia.fr/prix-artemisia-2021-ecologie-lison-ferne/">Prix Artemisia mention écologie</a> pour le livre « La Déesse Requin » (éditions Cfc)</p>
                    <span>2020</span>
                    <p>Lauréate de la bourse de la SCAM “Un Ticket pour Angoulême” (Janvier).</p>
                    <span>2019</span>
                    <p>Lauréate de la Bourse Découverte de la Fédération Wallonie-Bruxelles</p>
                    <span>2018</span>
                    <p><a href="https://cnl.propal.net/actualites/fauve-de-la-bd-alternative-2018">Fauve de la bande dessinée alternative </a>au Festival de bande dessinée d’Angoulême pour la revue collective « Bien Monsieur »</p>
                </aside>
            </div>
            <!-- Image bottom -->
            <div>
                <img class="image-contact-portfolio-artistique" src="public/images/contact/motifPoissons.png" alt="">
            </div>
        </div>

        <!-- ////////////// FIN Bloc noir de contact ////////////// -->


        <!-- ////////////// Les projets artistiques (ligne du temps) CANVAS ////////////// -->

        <!-- <div id="canvasPosition">
            <canvas id="canvasLigneTemps">

            </canvas>
        </div> -->
        <div id="ligneTempsContainer">
            <div class="flex">
                <div class="flex blocVerticalGauche">
                    <div class="relative">
                        <div id="blocDeesseRequin">
                            <img src="./public/images/portfolioArtistique/deesseRequin.png" alt="La Déesse Requin">
                            <!-- //TODO background beige aux textes -->
                            <p>
                                <span class="bold">
                                    Janvier 2020
                                </span>
                                <br>
                                « La Déesse Requin »
                                <br>
                                <span class="italic">
                                    Première bande dessinée parue aux éditions Cfc
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blocHorizontalHaut flex space-around">
                    <div class="relative">
                        <div id="blocSirenesMasculines">
                            <img src="./public/images/portfolioArtistique/sireneMasculine.png" alt="Sirènes masculines">
                            <p>
                                <span class="bold">
                                    Mai 2020
                                </span>
                                <br>
                                Sirenes
                                <br>
                                <span class="italic">
                                    Série de sirènes masculines
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocPlantesOctobre">
                            <img src="./public/images/portfolioArtistique/plantes_octobre.png" alt="Plantes d'Octobre">
                            <p>
                                <span class="bold">
                                    2020
                                </span>
                                <br>
                                Plantes d’octobre
                                <br>
                                <span class="italic">
                                    Série de dessins
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocCreaturesObscures">
                            <img src="./public/images/portfolioArtistique/creatures_obscures.png" alt="Créatures Obscures">
                            <p>
                                <span class="bold">
                                    2019
                                </span>
                                <br>
                                Créatures Obscures
                                <br>
                                <span class="italic">
                                    Série de dessins
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blocVerticalDroit">
                    <div class="relative">
                        <div id="blocBienMonsieur">
                            <img src="./public/images/portfolioArtistique/bienMonsieur.png" alt="Bien Monsieur">
                            <p>
                                <span class="bold">
                                    2016
                                </span>
                                <br>
                                Bien Monsieur
                                <br>
                                <span class="italic">
                                    Revue de bande dessinée alternative
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-direction-column">
                <div class="blocHorizontalBas flex space-around">
                    <div class="relative">
                        <div id="blocWBDM">
                            <img src="./public/images/portfolioArtistique/WBDM.png" alt="WBDM">
                            <p>
                                <span class="bold">

                                    Janvier 2021
                                </span>
                                <br>
                                Portraits pour WBDM
                                <br>
                                <span class="italic">
                                    Portraits de commande
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocAbecedaire">
                            <img src="./public/images/portfolioArtistique/escarpins.png" alt="Abécédaire Fétichiste">
                            <p>
                                <span class="bold">
                                    Avril 2021
                                </span>
                                <br>
                                Abécédaire Fétichiste
                                <br>
                                <span class="italic">
                                    Série de dessins
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocFanart">
                            <img src="./public/images/portfolioArtistique/inktober_fanart.png" alt="Hommage Fanart">
                            <p>
                                <span class="bold">
                                    Octobre 2021
                                </span>
                                <br>
                                [titre]
                                <br>
                                <span class="italic">                       
                                    Série de dessins en hommage aux titres de référence
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="flecheLigneTemps">&#10148;</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ////////////// FIN Les projets artistiques (ligne du temps) ////////////// -->

    <!-- Flèche "A Propos RETOUR" -->
    <div>
        <a href="#aPropos" class="flex retour">
            <img class="texte-fleche align-self-center" src="public/images/textes/texte-aPropos.png" alt="À Propos">
            <div class="fleche bas align-self-center">
                &#11015;
            </div>
        </a>
    </div>
</section>
<!-- --------------- FIN PAGE PORTFOLIO ARTISTIQUE --------------- -->

<!-- Pour faire flotter les deux sections "à propos" et "formation" PEUT ETRE PAS NECESSAIRE GRACE A ABSOLUTE-->
<div>
    <!-- --------------- PAGE A PROPOS (bloc principal)--------------- -->

    <section id="aPropos">
        <!-- div du haut (top et left à ajuster pour centrer): titre cliquable vers l'ancre "portfolio artistique" -->
        <div>
            <a href="#portfolioArtistique">
                <img class="rubriqueAPropos rubriqueAProposArt center" src="public/images/textes/texte-art.png" alt="Art">
            </a>
        </div>

        <!-- div du milieu FLOAT (top et left à ajuster): Contact, "Lison Ferné" et image Lison + "Formation" -->
        <div class="flex">
            <div class="align-self">
                <!-- FLOTTE -->

                <!-- //TODO Debugguer: pourquoi seul le fond est affecté par le js ? -->
                <!-- Le bouton "CONTACT" qui appelle la carte contact -->
                <div id="btnContact" onclick="toggle_contact()">
                    <img class="rubriqueAPropos rubriqueAProposContact" src="public/images/textes/texte-contact.png" alt="Contact">
                </div>
                <!-- Panneau déroulant au clic (js) -->
                <!--  //TODO enlever le style="display:none" dans la balise quand fini de bosser -->
                <div style="display:none" id="carteContact" class="carteContact">
                    <aside>
                        <!-- Les icones dans une div flottante -->
                        <!-- div sans l'image -->
                        <div class="flex contact-padding">
                            <div>
                                <!-- La petite croix -->
                                <div onclick="closeContact()" class="croix">
                                    &#10005;
                                </div>
                                <!-- div parente flottante -->
                                <div class="flex flex-direction-column">
                                    <!-- flotter à gauche -->
                                    Les icones
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-wix"></i>
                                    <i class="fab fa-tumblr"></i>
                                </div>
                            </div>
                            <div>
                                <!-- flotter à droite-->
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <a href="">Mail</a> lison.ferne@wanadoo.fr <br>
                                    num tel<br>
                                    Née le 22 avril 1993
                                </div>
                            </div>
                        </div>
                        <!-- Image bottom -->
                        <div>
                            <img class="image-contact" src="public/images/contact/motifPoissons.png" alt="">
                        </div>
                    </aside>
                </div>
            </div>
            <div class="portraitLisonHover">
                <!-- FLOTTE PAS DE FLOTTE, //TODO mettre en position absolue-->
                <a href="#formation">
                    <img class="portraitLison" src="public/images/aPropos/portraitLison.png" alt="Lison Ferné">
                </a>
                <div class="texteFormationHover">
                    <img class="rubriqueAPropos" src="public/images/textes/texte-formation.png" alt="Formation">
                </div>
            </div>
        </div>
        <!-- SORT DU FLOAT -->
        <div class="signatureLison">
            <!-- LISON FERNE -->
            <div>
                <img src="public/images/textes/signatureLison.png" alt="Lison Ferné">
            </div>
        </div>

        <!-- div du bas "Développement Web" -->
        <div>
            <a href="#competences">
                <img class="rubriqueAPropos rubriqueAProposDev" src="public/images/textes/texte-developpementWeb.png" alt="Developpement Web">
            </a>
        </div>
    </section>
    <!-- --------------- FIN PAGE A PROPOS (bloc principal)--------------- -->


    <!-- --------------- PAGE FORMATION (float avec "A propos") --------------- -->

    <section id="formation">
        <!-- Flèche "A Propos RETOUR" -->
        <div>
            <a href="#aPropos" class="">
                <img class="texte-fleche align-self-center" src="public/images/textes/texte-aPropos.png" alt="À Propos">
                <div class="fleche bas align-self-center">
                    &#11013;
                </div>
            </a>
        </div>
    </section>

    <!-- --------------- FIN PAGE FORMATION --------------- -->
</div>

<!-- --------------- PAGE WEBDEV --------------- -->


<!-- ////////////// Compétences ////////////// -->

<section id="competences">
    <div>
        <!-- Float -->
        <div>Panneau contact</div>
        <div>Bloc des compétences</div>
        <div>Fil d'ariane</div>
    </div>
    <div>
        <a href="#portfolioWebDev">Portfolio</a>
    </div>
</section>

<!-- ////////////// Portfolio WebDev ////////////// -->

<section id="portfolioWebDev">
    <div>
        <!-- Float -->
        <div>Menu des languages de programmation</div>
        <div>Bloc portfolio</div>
        <div>Fil d'ariane</div>
    </div>
    <div>
        <a href="#aPropos">à propos</a>
    </div>
</section>


<!-- --------------- FIN PAGE WEBDEV --------------- -->