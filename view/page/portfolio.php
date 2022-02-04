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
                        <a href="https://www.linkedin.com/in/lison-fern%C3%A9-488914168/" target="blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/lison.ferne/" target="blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/LisonIllustratrice" target="blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://lisonferne.wixsite.com/lisonferne" target="blank">
                            <i class="fab fa-wix"></i>
                        </a>
                        <a href="https://lasireneterrestre.tumblr.com/" target="blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                        <a href="mailto:lison.ferne@wanadoo.fr">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <aside id="recompenses">
                    <div id="recompensesDiv" class="flex">
                        <i class="fas fa-award"></i>
                        <h2>Récompenses</h2>
                    </div>

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
        <!-- //TODO Changer les tailles d'image dans le dossier htdocs -->
        <div id="ligneTempsContainer">
            <div class="flex">
                <div class="flex blocVerticalGauche">
                    <div class="relative">
                        <div id="blocDeesseRequin">
                            <a href="https://lisonferne.wixsite.com/lisonferne/la-deesse-requin" target="blank">
                                <img src="./public/images/portfolioArtistique/deesseRequin.png" alt="La Déesse Requin">
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
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blocHorizontalHaut flex space-around">
                    <div class="relative">
                        <div id="blocSirenesMasculines">
                            <!-- //TODO changer l'URL dans Wix  -->
                            <a href="https://lisonferne.wixsite.com/lisonferne/projet09" target="blank">
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
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocPlantesOctobre">
                            <a href="https://lisonferne.wixsite.com/lisonferne/inktober-plantes" target="blank">
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
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocCreaturesObscures">
                            <a href="https://lisonferne.wixsite.com/lisonferne/obscures" target="blank">
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
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blocVerticalDroit">
                    <div class="relative">
                        <div id="blocBienMonsieur">
                            <a href="https://lisonferne.wixsite.com/lisonferne/bien-monsieur" target="blank">
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
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-direction-column">
                <div class="blocHorizontalBas flex space-around">
                    <div class="relative">
                        <div id="blocWBDM">
                            <!-- //TODO changer l'URL dans Wix -->
                            <a href="https://lisonferne.wixsite.com/lisonferne/projects-7" target="blank">
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
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocAbecedaire">
                            <a href="https://lisonferne.wixsite.com/lisonferne/ab%C3%A9c%C3%A9daire-f%C3%A9tichiste" target="blank">
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
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="blocFanart">
                            <a href="https://www.instagram.com/lison.ferne/" target="blank">
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
                            </a>
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
        <div id="btnPortfolioArtistique">
            <a id="lienArtResponsive" href="#portfolioArtistique">
                <img class="rubriqueAPropos rubriqueAProposArt center" src="public/images/textes/texte-art.png" alt="Art">
            </a>
        </div>

        <!-- div du milieu FLOAT (top et left à ajuster): Contact, "Lison Ferné" et image Lison + "Formation" -->
        <div class="flex">
            <div class="align-self">
                <!-- FLOTTE -->

                <!-- Le bouton "CONTACT" qui appelle la carte contact -->
                <div id="btnContact" onclick="toggle_contact()">
                    <img class="rubriqueAPropos rubriqueAProposContact" src="public/images/textes/texte-contact.png" alt="Contact">
                </div>
                <!-- Panneau déroulant au clic (js) -->
                <div id="carteContact" class="carteContact">
                    <aside id="test1">
                        <!-- Les icones dans une div flottante -->
                        <!-- div sans l'image -->
                        <div id="contenuCarteContact" class="flex contact-padding">
                            <!-- La petite croix -->
                            <div onclick="toggle_contact()" class="croix">
                                &#10005;
                            </div>
                            <div>

                                <!-- div parente flottante -->
                                <div id="iconesReseaux" class="flex flex-direction-column">
                                    <!-- flotter à gauche -->

                                    <a href="https://www.linkedin.com/in/lison-fern%C3%A9-488914168/" target="blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="https://www.instagram.com/lison.ferne/" target="blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/LisonIllustratrice" target="blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://lisonferne.wixsite.com/lisonferne" target="blank">
                                        <i class="fab fa-wix"></i>
                                    </a>
                                    <a href="https://lasireneterrestre.tumblr.com/" target="blank">
                                        <i class="fab fa-tumblr"></i>
                                    </a>
                                    <a href="mailto:lison.ferne@wanadoo.fr">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- flotter à droite-->
                            <div class="texteCarteContact">
                                <p>
                                    Lison Ferné
                                </p>
                                <p>
                                    Née le 22 avril 1993
                                </p>
                                <div>
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:lison.ferne@wanadoo.fr">Mail</a>
                                </div>

                                <div class="cv-download">
                                    <i class="fas fa-paperclip"></i>
                                    <a href="./public/images/formation/cv-Lison-Ferne.pdf" download><span class="souligne">Télécharger le CV</span> </a>
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
        <div id="btnDeveloppementWeb">
            <a href="#competences">
                <img class="rubriqueAPropos rubriqueAProposDev" src="public/images/textes/texte-developpementWeb.png" alt="Developpement Web">
            </a>
        </div>
    </section>
    <!-- --------------- FIN PAGE A PROPOS (bloc principal)--------------- -->


    <!-- --------------- PAGE FORMATION (float avec "A propos") --------------- -->

    <section id="formation">
        <!-- Flèche "A Propos RETOUR" //TODO la placer au centre de la page -->
        <div id="flecheRetourFormation">
            <a href="#aPropos">
                <img class="texte-fleche align-self-center" src="public/images/textes/texte-aProposBlanc.png" alt="À Propos">
                <div class="fleche blanc align-self-center">
                    &#11013;
                </div>


            </a>
        </div>
        <!-- Bloc de Formation + Expérience : FLEX -->
        <div class="flex flex-direction-column" id="gros-bloc-formation">

            <!-- Div FLEX : Titres + CV à télécharger -->
            <div class="flex relative">
                <div class="bloc-50">
                    <h1 class="titreBloc">Formation</h1>
                </div>
                <div class="bloc-50">
                    <h1 class="titreBloc">Expérience</h1>
                </div>
                <!-- CV à télécharger -->
                <div class="cv-download">
                    <a href="./public/images/formation/cv-Lison-Ferne.pdf" download><span class="souligne">Télécharger le CV</span> <i class="fas fa-paperclip"></i></a>
                </div>
            </div>
            <div class="flex">

                <!-- Formation -->
                <div class="bloc-50">
                    <!-- Bloc Programmation -->
                    <div class="bloc-blanc">
                        <!-- div1 = titre -->
                        <div class="padding-30">
                            <h1 class="souligne">Programmation</h1>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation">2021-2022</p>
                                <p class="titre-formation">Front-End Developer</p>
                                <p><a href="https://www.interface3.be/" target="blank">Interface3 - Bruxelles</a> </p>
                            </div>
                            <!-- logo Interface 3 -->
                            <div class="align-self-center">
                                <a href="https://www.interface3.be/" target="blank">
                                    <img class="logo-formation" src="./public/images/formation/interface3-logo.png" alt="logo interface3">
                                </a>
                            </div>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation">septembre-novembre 2020</p>
                                <p class="titre-formation">« Prêt-à-coder »</p>
                                <p><a href="https://www.interface3.be/" target="blank">Interface3 - Bruxelles</a> </p>
                            </div>
                            <!-- logo Interface 3 -->
                            <div class="align-self-center">
                                <a href="https://www.interface3.be/" target="blank">
                                    <img class="logo-formation" src="./public/images/formation/interface3-logo.png" alt="logo interface3">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bloc Ecoles d'Art -->
                    <div class="bloc-beige">
                        <!-- div1 = titre -->
                        <div class="padding-30">
                            <h1 class="souligne">Écoles d’art</h1>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation"> 2014-2018 </p>
                                <p class="titre-formation">Master</p>
                                <p><a href="https://wiki.erg.be/m/" target="blank">Erg (École de Recherche Graphique)</a> option Narration-Bande dessinée - Bruxelles </p>
                            </div>
                            <!-- logo erg -->
                            <div class="align-self-center">
                                <a href="https://wiki.erg.be/m/" target="blank">
                                    <img class="logo-formation" src="./public/images/formation/erg_logo.png" alt="logo erg">
                                </a>
                            </div>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation"> 2011-2014 </p>
                                <p class="titre-formation">DMA</p>
                                <p>
                                    (Diplôme des Métiers d’Art) option Illustration, <a href="http://www.ecole-estienne.paris/" target="blank">École Estienne - Paris</a> </p>
                            </div>
                            <!-- logo estienne-->
                            <div class="align-self-center">
                                <a href="http://www.ecole-estienne.paris/" target="blank">
                                    <img class="logo-formation" src="./public/images/formation/estienne_logo.png" alt="logo estienne">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin bloc Formation -->

                <!-- Expérience -->
                <div class="bloc-50">
                    <!-- Bloc Domaine Artistique -->
                    <div class="bloc-noir">
                        <!-- div1 = titre -->
                        <div class="padding-30">
                            <h1 class="souligne">Domaine Artistique</h1>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation">2012-2021</p>
                                <p class="titre-formation">Édition et publication de mes travaux <a href="http://www.assoartemisia.fr/prix-artemisia-2021-ecologie-lison-ferne/" target="blank">(première bande dessinée primée, parue en janvier 2020)</a></p>
                            </div>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation">Septembre - Décembre 2021 </p>
                                <p class="titre-formation">Ateliers artistiques pour adolescents (dessin, mangas)</p>
                            </div>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation">2013-2021</p>
                                <p class="titre-formation">Montages d’expositions, concerts dessinés, festivals
                                    et salons, séances de dédicaces</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bloc Autre -->
                    <div class="bloc-noir">
                        <!-- div1 = titre -->
                        <div class="padding-30">
                            <h1 class="souligne">Autre</h1>
                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation"> 2017-2016 </p>
                                <p class="titre-formation">Vente et conseil en librairie <a href="http://librairie-candide.be/" target="blank">(Librairie Candide, Bruxelles)</a>, Horeca (serveuse, Bruxelles)</p>
                            </div>

                        </div>
                        <div class="flex padding-30">
                            <!-- TEXTE -->
                            <div>
                                <p class="date-formation"> 2015 </p>
                                <p class="titre-formation">Recrutement pour Oxfam Solidarité (Bruxelles et Wallonie)
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Fin bloc Expérience -->
            </div>

        </div>
    </section>

    <!-- --------------- FIN PAGE FORMATION --------------- -->
</div>

<!-- --------------- PAGE WEBDEV --------------- -->


<!-- ////////////// Compétences ////////////// -->

<section id="competences">
    <div>
        <!-- Flèche "A Propos RETOUR" -->
        <div id="divFleche-retour-competences-aPropos">
            <a href="#aPropos" class="flex retour">
                <img class="texte-fleche-retour-competences align-self-center" src="public/images/textes/texte-aPropos.png" alt="À Propos">
                <div class="fleche-retour-competences fleche-size haut align-self-center">
                    &#x2B06;
                </div>
            </a>
        </div>
        <!-- Float -->
        <div class="flex">
            <div id="blocContactCompetences" class="">
                <div class="flex" id="blocContactCompetencesContenu">
                    <div id="icones" class="flex flex-direction-column">
                        <div class="">
                            <!-- flotter à gauche -->
                            <div class="flex flex-direction-column">
                                <!-- flotter à gauche -->
                                <a href="https://www.linkedin.com/in/lison-fern%C3%A9-488914168/" target="blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://www.instagram.com/lison.ferne/" target="blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.facebook.com/LisonIllustratrice" target="blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://lisonferne.wixsite.com/lisonferne" target="blank">
                                    <i class="fab fa-wix"></i>
                                </a>
                                <a href="https://lasireneterrestre.tumblr.com/" target="blank">
                                    <i class="fab fa-tumblr"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <aside id="">
                        <p>
                            Lison Ferné
                        </p>
                        <p>
                            Née le 22 avril 1993
                        </p>
                        <a href="mailto:lison.ferne@wanadoo.fr">
                            <i class="fas fa-envelope"></i>
                            <span>
                                Mail
                            </span>
                        </a>


                        </a>
                    </aside>
                </div>
                <!-- Image bottom -->
                <div id="imageBlocContactCompetences">
                    <img class="image-contact-portfolio-artistique" src="public/images/contact/motifPoissons.png" alt="">
                </div>
            </div>
            <!-- Grande div + titre du bloc ("Compétences") -->
            <div class="margin-auto" id="grandBlocCompetencesPlusTitre">
                <h1>
                    Compétences
                </h1>

                <!-- Grand bloc Compétences (sans titre) -->
                <div id="grandBlocCompetences" class="flex">
                    <!--  -->
                    <!-- Gros bloc: back-end -->
                    <div id="blocBackEnd">
                        <h3>back-end</h3>
                        <div id="iconesBackEnd" class="flex">
                            <div>
                                <i class="fab fa-js"></i>
                                <br>
                                <!-- SVG JQUERY -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="35.955" height="34.631" viewBox="0 0 35.955 34.631">
                                    <path id="Icon_simple-jquery" data-name="Icon simple-jquery" d="M2.3,8.811c-3.184,4.575-2.79,10.526-.355,15.384.056.118.117.231.177.344a2.419,2.419,0,0,0,.115.223,1.266,1.266,0,0,0,.07.125c.039.078.081.153.122.228l.236.4c.043.073.086.146.135.219.082.141.18.281.266.421.039.059.075.117.118.176q.218.343.465.666c.117.16.234.316.36.472.041.057.086.114.128.171l.332.4c.041.046.081.1.124.149.147.177.3.35.459.524,0,0,0,.006.008.01a4.7,4.7,0,0,0,.636.66c.12.123.24.246.367.366l.152.146c.167.156.333.312.509.462,0,0,0,0,.008,0l.086.075c.153.133.307.267.465.39l.188.157c.128.1.26.2.39.3l.2.156c.139.1.288.208.431.31.052.038.1.075.159.11l.043.035.422.278.18.12c.22.141.439.275.657.407.063.032.126.066.184.1.162.093.33.188.493.275.09.051.183.095.276.141.113.063.229.125.349.188a.486.486,0,0,1,.084.034c.049.023.1.047.144.071.18.09.368.175.563.261a1.222,1.222,0,0,1,.114.051c.216.095.432.185.656.273.051.015.1.041.158.06.2.076.411.154.616.228l.075.027c.229.078.456.153.689.225.054.015.109.035.167.049a7.294,7.294,0,0,0,.71.2c15.39,2.805,19.863-9.253,19.863-9.253-3.757,4.893-10.425,6.183-16.74,4.747-.234-.054-.468-.129-.7-.2q-.428-.126-.85-.271l-.093-.036c-.2-.069-.4-.146-.6-.222q-.081-.034-.165-.062c-.22-.088-.435-.18-.648-.274-.047-.015-.085-.036-.132-.054q-.272-.125-.541-.255c-.056-.024-.105-.049-.159-.078-.141-.066-.282-.141-.42-.213q-.142-.068-.281-.144c-.169-.09-.339-.187-.508-.281-.051-.036-.109-.066-.168-.1q-.332-.2-.657-.4-.09-.056-.177-.118-.239-.147-.468-.309c-.053-.035-.1-.072-.155-.11q-.223-.155-.441-.318c-.063-.051-.13-.1-.2-.15-.132-.1-.266-.2-.4-.312l-.177-.141q-.255-.206-.5-.421a.387.387,0,0,0-.056-.045l-.521-.474-.15-.141c-.123-.125-.249-.244-.375-.368l-.146-.15q-.238-.237-.464-.485l-.022-.024c-.159-.174-.313-.351-.47-.531-.041-.046-.078-.1-.12-.146l-.339-.416q-.259-.333-.51-.672c-3.5-4.782-4.77-11.382-1.967-16.8m7.406-.708A11.045,11.045,0,0,0,11.8,16.206a13.65,13.65,0,0,0,1.016,1.7A7.955,7.955,0,0,0,14,19.383c.16.183.335.36.516.538l.135.135q.256.248.525.487l.023.02q.3.265.621.513c.051.035.094.075.144.11.21.162.421.318.64.472l.022.014c.093.067.192.129.3.195.042.027.09.063.135.09.159.1.315.2.476.3.025.01.048.024.072.035.135.083.282.162.423.236.049.03.1.052.149.081.1.049.2.1.3.153l.048.021c.2.1.41.192.612.285.051.02.094.036.138.057.167.072.336.141.5.205.075.025.146.056.216.078.153.057.313.11.465.162l.21.067a5.077,5.077,0,0,0,.672.194c11.88,1.969,14.631-7.181,14.631-7.181C33.495,20.209,28.7,21.907,23.6,20.581q-.339-.088-.672-.195c-.072-.02-.135-.042-.2-.063-.156-.054-.316-.107-.468-.163l-.216-.081c-.168-.067-.339-.131-.5-.2-.051-.022-.1-.038-.136-.06-.21-.094-.421-.187-.625-.288l-.309-.16-.178-.09c-.138-.072-.265-.147-.4-.225A.93.93,0,0,1,19.793,19c-.159-.1-.324-.2-.476-.3-.051-.028-.1-.063-.146-.093l-.312-.2c-.216-.15-.427-.312-.64-.468-.048-.044-.094-.08-.141-.118a14.262,14.262,0,0,1-4.857-6.912A10.741,10.741,0,0,1,14.06,2.3m6.43-.22a6.925,6.925,0,0,0-.555,6.683,9.43,9.43,0,0,0,5.406,5.047c.1.038.192.069.292.1l.132.04c.138.043.278.094.42.126,6.564,1.266,8.34-3.371,8.818-4.052-1.563,2.244-4.184,2.783-7.4,2a7.266,7.266,0,0,1-.774-.24,9.516,9.516,0,0,1-.925-.381,9.782,9.782,0,0,1-1.62-.99C21.406,8.235,19.623,4.071,21.5.679" transform="translate(-0.016 -0.68)" fill="#fff" />
                                </svg>
                            </div>
                            <div>
                                <!-- SVG MySQL -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="45.327" height="30.779" viewBox="0 0 45.327 30.779">
                                    <path id="Icon_simple-mysql" data-name="Icon simple-mysql" d="M30.983,9.155a2.084,2.084,0,0,0-.517.062v.025h.026a4.261,4.261,0,0,0,.4.516c.1.2.189.4.291.6l.026-.028a.7.7,0,0,0,.264-.629c-.076-.089-.087-.178-.151-.264-.076-.127-.238-.189-.34-.289ZM10.9,34.074H9.147c-.057-2.95-.232-5.723-.51-8.329H8.622L5.959,34.074H4.627L1.983,25.745H1.964q-.292,3.748-.368,8.329H0Q.156,28.5.774,23.63H2.946L5.468,31.3h.015L8.027,23.63h2.068q.686,5.708.808,10.444Zm7.587-7.706q-1.071,5.793-2.818,8.423-1.365,2.028-2.99,2.026a2.948,2.948,0,0,1-1.069-.261v-.933a4.846,4.846,0,0,0,.729.049,1.761,1.761,0,0,0,1.222-.419,1.521,1.521,0,0,0,.557-1.143,7.576,7.576,0,0,0-.434-1.783l-1.915-5.961h1.719l1.373,4.457a5.984,5.984,0,0,1,.387,2.121,28.812,28.812,0,0,0,1.577-6.578h1.662Zm23.277,7.706H36.794V23.63h1.671v9.16h3.3Zm-6.27.255-1.919-.944a4.056,4.056,0,0,0,.482-.472,6.4,6.4,0,0,0,1.224-4.255q0-5.184-4.07-5.186a3.872,3.872,0,0,0-3.116,1.316,6.411,6.411,0,0,0-1.22,4.24,6.191,6.191,0,0,0,1.084,4.042,3.712,3.712,0,0,0,2.99,1.162,4.8,4.8,0,0,0,1.369-.185l2.5,1.458.68-1.175Zm-6.217-2.346a6.418,6.418,0,0,1-.636-3.279q0-3.946,2.4-3.947a2.018,2.018,0,0,1,1.845.944,6.388,6.388,0,0,1,.635,3.254q0,3.977-2.4,3.981a2.019,2.019,0,0,1-1.847-.944Zm-3.131-.8a2.767,2.767,0,0,1-.975,2.183,3.829,3.829,0,0,1-2.614.85,5.238,5.238,0,0,1-2.971-.973l.448-.9a5.067,5.067,0,0,0,2.247.619,2.361,2.361,0,0,0,1.479-.415,1.423,1.423,0,0,0,.567-1.162c0-.623-.434-1.152-1.224-1.6-.733-.4-2.2-1.241-2.2-1.241a2.5,2.5,0,0,1-1.194-2.223,2.592,2.592,0,0,1,.888-2.049,3.346,3.346,0,0,1,2.3-.784,4.741,4.741,0,0,1,2.644.774l-.4.9a5.148,5.148,0,0,0-2.009-.434,1.778,1.778,0,0,0-1.235.389,1.293,1.293,0,0,0-.468.99c0,.619.442,1.152,1.258,1.605.742.406,2.242,1.265,2.242,1.265a2.459,2.459,0,0,1,1.224,2.206ZM43.861,20.128a5.79,5.79,0,0,0-2.45.355c-.189.076-.491.076-.517.315.1.1.119.264.208.4a2.9,2.9,0,0,0,.653.769c.264.208.529.408.806.585.491.3,1.048.482,1.53.786.274.178.553.4.831.591.138.094.227.264.4.325v-.038c-.087-.113-.113-.278-.2-.4-.127-.127-.253-.24-.378-.365a6.087,6.087,0,0,0-1.313-1.275c-.4-.276-1.288-.661-1.454-1.124l-.025-.026a5.082,5.082,0,0,0,.869-.2c.429-.113.822-.089,1.265-.2.2-.051.4-.113.6-.178v-.113c-.227-.227-.4-.534-.631-.746a16.747,16.747,0,0,0-2.085-1.554c-.4-.253-.9-.415-1.316-.631-.151-.076-.4-.113-.491-.24a4.869,4.869,0,0,1-.519-.971c-.363-.7-.718-1.464-1.033-2.2a13.078,13.078,0,0,0-.642-1.441A12.724,12.724,0,0,0,33.1,7.835a6.15,6.15,0,0,0-1.617-.517c-.315-.015-.631-.038-.944-.051a4.582,4.582,0,0,1-.585-.444c-.718-.453-2.576-1.435-3.1-.136-.34.82.5,1.628.8,2.043a5.822,5.822,0,0,1,.642.944c.089.219.113.444.2.672a15.113,15.113,0,0,0,.655,1.694,5.792,5.792,0,0,0,.466.78c.1.138.276.2.315.429a3.676,3.676,0,0,0-.291.944A5.594,5.594,0,0,0,30,18.443c.2.314.684,1.009,1.328.742.567-.227.442-.944.6-1.577.038-.151.013-.251.091-.353v.028c.178.355.355.693.517,1.048a7.106,7.106,0,0,0,1.637,1.69c.3.227.542.619.92.759v-.038h-.028a1.686,1.686,0,0,0-.291-.251,6.506,6.506,0,0,1-.661-.755,16.544,16.544,0,0,1-1.411-2.3c-.208-.4-.382-.823-.548-1.214-.076-.151-.076-.378-.2-.453a4.661,4.661,0,0,0-.6.856A7.215,7.215,0,0,0,31,18.532c-.051.013-.026,0-.051.026-.4-.1-.542-.517-.693-.869a5.482,5.482,0,0,1-.113-3.371c.089-.264.466-1.1.315-1.352-.079-.24-.329-.378-.466-.572a4.679,4.679,0,0,1-.453-.806c-.3-.706-.453-1.488-.782-2.195a6.542,6.542,0,0,0-.631-.969,6.355,6.355,0,0,1-.7-.982c-.062-.138-.151-.366-.051-.517a.215.215,0,0,1,.178-.17c.166-.136.633.042.8.117A6.459,6.459,0,0,1,29.6,7.5c.178.125.368.365.595.427h.264c.4.089.859.026,1.237.138a8.081,8.081,0,0,1,1.817.869,11.243,11.243,0,0,1,3.938,4.317c.151.291.217.557.355.859.264.623.591,1.252.859,1.855a8.223,8.223,0,0,0,.9,1.694c.189.264.948.4,1.288.54a9.176,9.176,0,0,1,.869.355c.434.264.857.567,1.265.857.208.144.837.459.874.714Z" transform="translate(0 -6.039)" fill="#fff" />
                                </svg>
                                <br>
                                <i class="fab fa-php"></i>
                            </div>

                        </div>
                        <div id="texteBackEnd">
                            JavaScript<br>
                            JQuery<br>
                            PHP<br>
                            MySql<br>
                        </div>
                    </div>
                    <!-- Bloc qui contient "front-end" "design" et "outils" -->
                    <div class="flex flex-direction-column">
                        <!-- Bloc "front-end" -->
                        <div id="blocFrontEnd">
                            <h3>front-end</h3>
                            <div class="flex">
                                <div id="iconesFrontEnd" class="flex flex-direction-column">
                                    <div>
                                        <i class="fab fa-html5"></i>
                                        <i class="fab fa-sass"></i>
                                    </div>
                                    <div>
                                        <i class="fab fa-css3"></i>
                                        <i class="fab fa-bootstrap"></i>
                                    </div>
                                </div>
                                <div id="texteFrontEnd">
                                    HTML5<br>
                                    CSS<br>
                                    SASS<br>
                                    Bootstrap<br>
                                </div>

                            </div>
                        </div>
                        <!-- Bloc design et outils -->
                        <div class="flex" id="blocDesign_outils">
                            <!-- Design -->
                            <div id="blocDesign">
                                <h3>design</h3>
                                <div class="flex">
                                    <div id="texteDesign">
                                        Photoshop<br>
                                        Illustrator<br>
                                        InDesign<br>
                                        XD<br>
                                        Animate<br>
                                    </div>
                                    <!-- Icones  -->
                                    <div id="iconesDesign" class=" flex flex-direction-column">
                                        <!-- Photoshop -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.317" height="31.509" viewBox="0 0 32.317 31.509">
                                            <path id="Icon_simple-adobephotoshop" data-name="Icon simple-adobephotoshop" d="M0,.45V31.959H32.317V.45ZM1.347,1.8H30.97V30.612H1.347ZM7.81,7.829c0-.09.189-.156.3-.156.867-.044,2.138-.067,3.471-.067,3.733,0,5.184,2.047,5.184,4.667,0,3.42-2.48,4.888-5.523,4.888-.512,0-.687-.023-1.044-.023v5.173c0,.112-.044.156-.155.156H7.966c-.112,0-.155-.04-.155-.152V7.829Zm2.39,7.153c.31.022.555.022,1.091.022,1.575,0,3.057-.555,3.057-2.688,0-1.71-1.058-2.577-2.857-2.577-.533,0-1.044.022-1.289.044v5.2Zm11.59-1.6c-1.066,0-1.422.533-1.422.978,0,.489.242.821,1.666,1.555,2.111,1.023,2.777,2,2.777,3.443,0,2.154-1.643,3.312-3.865,3.312a5.883,5.883,0,0,1-2.76-.579c-.088-.044-.108-.11-.108-.222V19.894c0-.135.065-.179.154-.113a4.96,4.96,0,0,0,2.709.8c1.066,0,1.511-.444,1.511-1.045,0-.489-.31-.912-1.666-1.623-1.912-.916-2.712-1.845-2.712-3.4,0-1.733,1.355-3.178,3.71-3.178a6.276,6.276,0,0,1,2.416.377.294.294,0,0,1,.135.267v1.845c0,.112-.067.179-.2.135a4.822,4.822,0,0,0-2.347-.579Z" transform="translate(0 -0.45)" fill="#8b8b8b" />
                                        </svg>
                                        <!-- Illustrator -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.317" height="31.509" viewBox="0 0 32.317 31.509">
                                            <path id="Icon_simple-adobeillustrator" data-name="Icon simple-adobeillustrator" d="M0,.45V31.959H32.317V.45ZM1.347,1.8H30.97V30.612H1.347ZM11.21,18.292l-1.066,4.037c-.023.112-.067.137-.2.137H7.967c-.135,0-.155-.044-.135-.2L11.657,8.875a4.154,4.154,0,0,0,.132-1.122c0-.089.044-.135.112-.135h2.822c.089,0,.135.024.156.135l4.289,14.534c.023.112,0,.178-.112.178H16.834c-.112,0-.178-.027-.2-.116l-1.111-4.06H11.206ZM14.964,16.1c-.377-1.489-1.266-4.751-1.6-6.329h-.023c-.288,1.575-1,4.242-1.555,6.329Zm6.059-7.484a1.377,1.377,0,1,1,2.755,0A1.29,1.29,0,0,1,22.378,10a1.266,1.266,0,0,1-1.36-1.377Zm.151,3.062c0-.108.044-.148.156-.148h2.114c.118,0,.162.044.162.156V22.32c0,.112-.022.156-.155.156H21.364c-.135,0-.179-.067-.179-.175V11.68Z" transform="translate(0 -0.45)" fill="#8b8b8b" />
                                        </svg>
                                        <!-- In Design -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.317" height="31.509" viewBox="0 0 32.317 31.509">
                                            <path id="Icon_simple-adobeindesign" data-name="Icon simple-adobeindesign" d="M0,.45V31.959H32.317V.45ZM1.347,1.8H30.97V30.612H1.347ZM11.816,22.288c0,.135-.023.178-.178.178H9.57c-.135,0-.178-.067-.178-.178V7.832c0-.135.067-.178.178-.178h2.091c.11,0,.155.044.155.156V22.288ZM14.2,17.074a5.388,5.388,0,0,1,5.523-5.732c.288,0,.444,0,.711.02V7.789a.13.13,0,0,1,.135-.135h2.188c.113,0,.135.046.135.113v12.6a10.03,10.03,0,0,0,.067,1.352c0,.089-.027.112-.117.156a8.164,8.164,0,0,1-3.533.8c-2.98,0-5.113-1.845-5.113-5.6Zm6.234-3.533a2,2,0,0,0-.8-.135c-1.73,0-2.945,1.333-2.945,3.555,0,2.534,1.236,3.555,2.791,3.555a2.606,2.606,0,0,0,.956-.155v-6.82Z" transform="translate(0 -0.45)" fill="#8b8b8b" />
                                        </svg>
                                        <!-- XD -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.317" height="31.509" viewBox="0 0 32.317 31.509">
                                            <path id="Icon_simple-adobexd" data-name="Icon simple-adobexd" d="M26.594.45H5.723A5.718,5.718,0,0,0,0,6.173V26.236a5.718,5.718,0,0,0,5.723,5.723H26.594a5.718,5.718,0,0,0,5.723-5.723V6.173A5.718,5.718,0,0,0,26.594.45Zm4.363,25.261a4.878,4.878,0,0,1-4.874,4.9H6.234a4.9,4.9,0,0,1-4.888-4.888V6.684A4.9,4.9,0,0,1,6.234,1.8H26.069a4.888,4.888,0,0,1,4.888,4.888ZM12.779,15.194l3.77,7.244c.067.108.027.215-.081.215H14.125a.264.264,0,0,1-.283-.175c-.862-1.777-1.737-3.555-2.639-5.467h-.027c-.808,1.8-1.7,3.7-2.558,5.48a.259.259,0,0,1-.242.148H6.154c-.135,0-.148-.108-.081-.189l3.689-7.029L6.194,8.314a.109.109,0,0,1,.081-.189H8.591a.212.212,0,0,1,.242.148c.848,1.777,1.71,3.609,2.518,5.4h.027c.781-1.777,1.643-3.622,2.478-5.386.067-.108.108-.175.242-.175h2.168c.108,0,.148.081.081.189Zm4.43,2.195a5.267,5.267,0,0,1,5.4-5.588,5.971,5.971,0,0,1,.7.027V8.26a.135.135,0,0,1,.135-.135h2.128c.108,0,.135.04.135.108V20.594a9.591,9.591,0,0,0,.067,1.32c0,.081-.027.108-.108.148a8.021,8.021,0,0,1-3.447.781C19.3,22.856,17.209,21.052,17.209,17.389Zm6.1-3.447a2.036,2.036,0,0,0-.781-.135c-1.7,0-2.882,1.306-2.882,3.474,0,2.478,1.212,3.474,2.733,3.474a2.54,2.54,0,0,0,.929-.148V13.942Z" transform="translate(0 -0.45)" fill="#8b8b8b" />
                                        </svg>
                                        <!-- Animate -->
                                        <svg id="Groupe_68" data-name="Groupe 68" xmlns="http://www.w3.org/2000/svg" width="32.355" height="31.595" viewBox="0 0 32.355 31.595">
                                            <path id="Tracé_10" data-name="Tracé 10" d="M205.3,329.43c-.04-.007-.072-.063-.107-.1h-22.54c-.038.147-.169.1-.264.122a5.687,5.687,0,0,0-4.418,4.311c-.038.14.025.338-.171.419v21.891c.2.079.139.278.174.417a5.671,5.671,0,0,0,5.548,4.413q10.458.039,20.916,0a5.68,5.68,0,0,0,5.716-5.834q0-9.945,0-19.89A5.655,5.655,0,0,0,205.3,329.43ZM208.4,354a5.065,5.065,0,0,1-5.1,5.2q-9.323.039-18.646,0a5.056,5.056,0,0,1-4.946-3.934c-.032-.124.019-.3-.156-.371V335.373c.175-.071.12-.248.153-.372a5.071,5.071,0,0,1,3.939-3.845c.084-.02.2.023.235-.108H203.98c.032.029.059.079.1.085a5.041,5.041,0,0,1,4.327,5.13Q208.4,345.128,208.4,354Z" transform="translate(-177.803 -329.334)" fill="#8b8b8b" />
                                            <g id="Groupe_67" data-name="Groupe 67" transform="translate(4.09 8.669)">
                                                <path id="Tracé_11" data-name="Tracé 11" d="M212.724,389.484c.492.055,1.237-.249,1.664.113.394.334.471,1.052.669,1.607q2.085,5.856,4.163,11.714c.25.7.251.7-.522.7-.665,0-1.33-.014-1.994.006a.5.5,0,0,1-.58-.41c-.27-.855-.59-1.694-.866-2.548a.5.5,0,0,0-.567-.42q-2.074.031-4.149,0c-.343-.005-.462.129-.552.429-.246.825-.543,1.635-.778,2.463a.579.579,0,0,1-.69.488c-.627-.028-1.258-.032-1.885,0-.494.025-.576-.117-.412-.58q1.824-5.149,3.6-10.313a9.357,9.357,0,0,0,.847-2.986c0-.258.181-.268.373-.268C211.571,389.486,212.091,389.484,212.724,389.484Zm-.154,2.546c-.172.622-.309,1.15-.465,1.672q-.523,1.75-1.065,3.494c-.066.214-.135.376.2.373,1-.01,2,0,3.054,0Z" transform="translate(-206.148 -389.417)" fill="#8b8b8b" />
                                                <path id="Tracé_12" data-name="Tracé 12" d="M310.833,413.18a4.7,4.7,0,0,1,3.3-1.026,3.347,3.347,0,0,1,3.246,3.385c.085,2.386.04,4.777.06,7.165,0,.285-.112.375-.383.374-.682,0-1.366,0-2.047.035-.409.022-.525-.128-.521-.525.017-1.742.008-3.485.008-5.227,0-.18,0-.359,0-.539-.039-1.868-1.478-2.656-3.083-1.7a.832.832,0,0,0-.469.814c.023,2.209,0,4.418.019,6.628,0,.417-.1.578-.542.553a16.564,16.564,0,0,0-1.831,0c-.444.024-.584-.118-.58-.573.021-2.532.014-5.065.007-7.6,0-.736-.012-1.474-.062-2.207-.023-.342.074-.448.406-.433.448.021.9.005,1.347.005C310.554,412.313,310.554,412.313,310.833,413.18Z" transform="translate(-293.265 -408.864)" fill="#8b8b8b" />
                                            </g>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <!-- Outils -->
                            <div id="blocOutils">
                                <h3>outils</h3>
                                <div class="flex">
                                    <div id="texteOutils">
                                        GitHub<br>
                                        SublimeMerge<br>
                                        Clip Studio Paint<br>
                                        Wix<br>
                                        WordPress<br>

                                    </div>

                                    <!-- Icones  -->
                                    <div id="iconesOutils" class=" flex flex-direction-column">
                                        <i class="fab fa-github"></i>
                                        <i class="fab fa-git-alt"></i>
                                        <!-- Svg Clip Studio Paint -->
                                        <svg id="Groupe_61" data-name="Groupe 61" xmlns="http://www.w3.org/2000/svg" width="26.87" height="25.725" viewBox="0 0 26.87 25.725">
                                            <path id="Tracé_8" data-name="Tracé 8" d="M9.524,0C14.09.269,17.855,2,20.03,6.238A8.608,8.608,0,0,1,15.9,18.146c-1.869.9-3.786,1.7-5.69,2.522-.44.19-.642.34-.282.806a10.586,10.586,0,0,1,.793,1.28,1.921,1.921,0,0,1-1.035,2.807A2.583,2.583,0,0,1,6.578,24.5c-1.024-1.648-2-3.325-3.049-4.958-.305-.482-.182-.629.271-.824q4.613-2,9.21-4.034c2.346-1.04,3.591-2.994,3.254-5.305A5.849,5.849,0,0,0,12.07,4.587a6.7,6.7,0,0,0-5.19.242C4.677,5.822,2.46,6.783.248,7.757c-1.206.532-1.625,1.272-1.243,2.2a2.064,2.064,0,0,0,2.646,1.058C2.939,10.485,4.2,9.9,5.475,9.337c.853-.377,1.7-.771,2.567-1.124a2.511,2.511,0,0,1,3.339,1.372,1.762,1.762,0,0,1-.874,2.272c-2.343,1.072-4.666,2.214-7.083,3.086a7.153,7.153,0,0,1-8.842-3.773,5.244,5.244,0,0,1,2.7-6.854C-.054,3.07,2.65,1.909,5.359.764A10.686,10.686,0,0,1,9.524,0" transform="translate(5.832)" fill="#fff" />
                                        </svg>
                                        <i class="fab fa-wix"></i>
                                        <i class="fab fa-wordpress-simple"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Flèche "Portfolio WEB RETOUR" -->
    <div id="divFleche-competences-portfolioWeb">
        <a href="#portfolioWebDev" class="flex retour">
            <img class="texte-fleche-competences-portfolioWeb align-self-center" src="public/images/textes/texte-portfolio.png" alt="À Propos">
            <div class="fleche-retour-competences fleche-size haut align-self-center">
                &#11015;
            </div>
        </a>
    </div>

</section>

<!-- ////////////// Portfolio WebDev ////////////// -->

<section id="portfolioWebDev">

    <!-- Flèche "A Propos RETOUR" -->
    <div id="divFleche-retour-portfolio-aPropos">
        <a href="#aPropos" class="flex retour">
            <img class="texte-fleche-retour-portfolio align-self-center" src="public/images/textes/texte-aProposBlanc.png" alt="À Propos">
            <div class="fleche-retour-portfolio fleche-size blanc align-self-center">
                &#x2B06;
            </div>
        </a>
    </div>
    <div>
        <!-- Float -->
        <!-- 2 blocs (menu + Portfolio) -->
        <div class="flex">
            <!-- Menu  -->
            <div id="menuPortfolio" class="flex flex-direction-column">
                <div>
                    <div id="caseVide">
                    </div>
                    <div id="html">
                        <button onclick="toggleHtml()">
                            Html / CSS
                        </button>
                    </div>

                    <div id="bootstrap">
                        <button onclick="toggleBootstrap()">
                            Bootstrap
                        </button>
                    </div>
                    <div id="sass">
                        <button onclick="toggleSass()">
                            SASS
                        </button>
                    </div>
                    <div id="php">
                        <button onclick="togglePhp()">
                            PHP
                        </button>
                    </div>
                    <div id="javascript">
                        <button onclick="toggleJavascript()">
                            JavaScript
                        </button>
                    </div>
                    <div id="mysql">
                        <button onclick="toggleMysql()">
                            MySQL
                        </button>
                    </div>
                </div>
                <!-- Image bottom -->
                <div id="divImageMenuPortfolio">
                    <img id="imageMenuPortfolio" src="public/images/portfolio/gardesMini.jpg" alt="Motif Noir & Blanc">
                </div>

            </div>
            <!-- Portfolio -->
            <div id="grandBlocPortfolio">
                <h1>
                    Portfolio
                </h1>
                <!-- Div Globale -->
                <div id="blocPortfolio" class=flex>
                    <!-- Div Home Safe + Site CV -->
                    <div class="flex flex-direction-column">
                        <div id="homeSafe" class="elementPortfolio border blocHomeSafe html bootstrap php mysql javascript">
                            <a href="https://github.com/Lison-creator/home_safe" target="blank">
                                <h3>
                                    Home Safe
                                </h3>
                                <div class="flex">
                                    <div>
                                        <h2>Rentrez chez vous en toute sécurité !</h2>
                                        <p>Première version d'un site qui recense les meilleurs trajets à Bruxelles</p>
                                    </div>
                                    <div id="imgHomeSafe">
                                        <!-- Logo Home Safe -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="65.109" height="100.125" viewBox="0 0 102.109 147.125">
                                            <g id="Groupe_1743" data-name="Groupe 1743" transform="translate(-451.766 643.243)">
                                                <path id="Tracé_1120" data-name="Tracé 1120" d="M553.483-590.784A50.035,50.035,0,0,0,502.2-640.8a50.2,50.2,0,0,0-48.775,49.09c-.24,13.233,15.257,37.344,16.211,39l9.7,16.806,21.953,38.024a2.493,2.493,0,0,0,4.318,0L527.56-535.91l9.7-16.8C538.225-554.383,553.483-577.94,553.483-590.784Z" transform="translate(-0.631 -0.926)" fill="#282828" />
                                                <g id="Groupe_1591" data-name="Groupe 1591" transform="translate(451.765 -643.243)">
                                                    <path id="Tracé_1121" data-name="Tracé 1121" d="M556.37-568.984a3.866,3.866,0,0,0,.605-.786,3.99,3.99,0,0,0,.391-.925,3.78,3.78,0,0,0,.14-1.031,3.738,3.738,0,0,0-.307-1.506,3.958,3.958,0,0,0-.829-1.228,3.95,3.95,0,0,0-1.228-.83,3.738,3.738,0,0,0-1.506-.306,3.751,3.751,0,0,0-1.031.14,3.947,3.947,0,0,0-.925.391,3.807,3.807,0,0,0-.785.6,3.858,3.858,0,0,0-.605.783,3.871,3.871,0,0,0-.391.924,3.771,3.771,0,0,0-.139,1.027,3.754,3.754,0,0,0,.139,1.031,3.962,3.962,0,0,0,.391.925,3.824,3.824,0,0,0,.605.786,3.807,3.807,0,0,0,.785.6,3.942,3.942,0,0,0,.925.391,3.777,3.777,0,0,0,1.031.14,3.788,3.788,0,0,0,1.026-.14,3.856,3.856,0,0,0,.925-.391A3.9,3.9,0,0,0,556.37-568.984Z" transform="translate(-489.16 617.428)" fill="#fac815" />
                                                    <path id="Tracé_1122" data-name="Tracé 1122" d="M539.128-547.778q-.211.639-.417,1.288t-.416,1.282q-.212.633-.417,1.185H541.2l-1.655-4.946Q539.339-548.416,539.128-547.778Z" transform="translate(-484.627 607.267)" fill="#fac815" />
                                                    <path id="Tracé_1123" data-name="Tracé 1123" d="M501.541-643.228a51.229,51.229,0,0,0-49.772,50.093c-.245,13.5,15.569,38.108,16.543,39.794l9.9,17.149,5,8.664c3.185-1.32,6.424-2.523,9.633-3.765,6.3-2.439,14.211-5.032,18.8-10.126A5.613,5.613,0,0,0,513-544c1.271-6.061-6.759-7.947-10.963-8.61a174.916,174.916,0,0,1-23.9-5.416c-5.382-1.647-13.562-4.681-13-11.753a8.733,8.733,0,0,1,1.387-3.995c3.437-5.376,8.91-13.45,9.229-13.815a64.2,64.2,0,0,0,4.18-5.4h-5.847a3.191,3.191,0,0,1-3.181-3.182v-16.145h-3.209a2,2,0,0,1-1.693-3.328l7.374-7.753,8.848-9.3a2.391,2.391,0,0,1,3.385,0l8.847,9.3,7.374,7.753a2,2,0,0,1-1.693,3.328h-3.208v16.145a3.191,3.191,0,0,1-3.182,3.182h-8.7c-6.366,8.366-13.639,19.932-13.687,22.581a4.915,4.915,0,0,0,1.5,3.5c1.821,1.838,4.244,2.587,6.635,3.257,6.8,1.9,32.049,5.477,37.077,7.99,3.5,1.75,6.825,5.455,4.543,9.493a13.8,13.8,0,0,1-2.927,3.315,312.723,312.723,0,0,1-30.226,23.549l12.655,21.918a2.544,2.544,0,0,0,4.406,0l22.4-38.8,9.9-17.139c.988-1.71,16.557-25.75,16.557-38.856A51.057,51.057,0,0,0,501.541-643.228Zm.5,17.954a5.324,5.324,0,0,1-1.839-3.32,1.773,1.773,0,0,0-.054-.357v-.831a.426.426,0,0,0,.035-.194,5.241,5.241,0,0,1,1.712-3.36,4.8,4.8,0,0,1,2.613-1.226,1.984,1.984,0,0,0,.375-.052h.077a.747.747,0,0,0,.367,0h.058c.01.023.031.017.05.018a4.148,4.148,0,0,1,1.7.494,5.818,5.818,0,0,1,2.424,2.52c.017.032.025.072.064.1.019-.035.035-.066.051-.1a6.066,6.066,0,0,1,1.535-1.927,4.642,4.642,0,0,1,2.3-1.059,1.423,1.423,0,0,0,.318-.046h.019a1.079,1.079,0,0,0,.445,0h.058c.017.03.046.018.069.02a4.523,4.523,0,0,1,1.706.45,5.169,5.169,0,0,1,2.9,4.015,2.136,2.136,0,0,0,.054.366v.831a1.293,1.293,0,0,0-.053.337,5.152,5.152,0,0,1-1.436,2.953q-3.942,4.009-7.909,8c-.057.058-.085.057-.141,0q-3.393-3.452-6.789-6.9C502.52-624.79,502.3-625.051,502.042-625.274Zm-1.189,22.992a.3.3,0,0,1,.082-.211.286.286,0,0,1,.218-.088h.7a.315.315,0,0,1,.218.088.28.28,0,0,1,.095.211v3.816H507.9v-3.816a.3.3,0,0,1,.082-.211.286.286,0,0,1,.218-.088h.688a.35.35,0,0,1,.224.082.263.263,0,0,1,.1.217v9.5c0,.2-.109.3-.326.3H508.2a.265.265,0,0,1-.3-.3v-4.366h-5.734v4.366c0,.2-.109.3-.326.3h-.688a.265.265,0,0,1-.3-.3ZM497.041-576.8a4.944,4.944,0,0,1-1.336,1.651,6.252,6.252,0,0,1-2,1.055,7.918,7.918,0,0,1-2.467.374,7.015,7.015,0,0,1-2.446-.445,9.419,9.419,0,0,1-2.24-1.195,5.787,5.787,0,0,1-.73-.618q-.3-.3-.471-.488l-.033-.032a.058.058,0,0,0-.022-.027.063.063,0,0,1-.022-.017.058.058,0,0,0-.022-.027.092.092,0,0,1-.022-.016.761.761,0,0,1-.249-.434.615.615,0,0,1,.249-.412l1.872-1.786a.705.705,0,0,1,.368-.163.4.4,0,0,1,.205.065,2.018,2.018,0,0,1,.26.194q.184.152.471.406a6.3,6.3,0,0,0,.655.5,5.5,5.5,0,0,0,1.093.574,3.176,3.176,0,0,0,1.136.206,2.981,2.981,0,0,0,.925-.124,1.561,1.561,0,0,0,.59-.33,1.176,1.176,0,0,0,.309-.476,1.774,1.774,0,0,0,.092-.573.847.847,0,0,0-.255-.6,2.628,2.628,0,0,0-.622-.47,5.278,5.278,0,0,0-.768-.351q-.4-.147-.693-.243a15.959,15.959,0,0,1-2.273-.979,7.03,7.03,0,0,1-1.623-1.167,4.38,4.38,0,0,1-.974-1.417,4.411,4.411,0,0,1-.325-1.725,4.075,4.075,0,0,1,.406-1.827,4.022,4.022,0,0,1,1.158-1.406,5.522,5.522,0,0,1,1.812-.9,8.231,8.231,0,0,1,2.37-.319,7.93,7.93,0,0,1,1.889.221,7.189,7.189,0,0,1,1.78.709q.367.216.7.449a7.269,7.269,0,0,1,.579.45,2.756,2.756,0,0,1,.4.411.6.6,0,0,1,.146.335.5.5,0,0,1-.071.26,1.644,1.644,0,0,1-.211.27l-1.656,1.764a.53.53,0,0,1-.368.184.469.469,0,0,1-.276-.087,3.466,3.466,0,0,1-.276-.216l-.1-.086c-.144-.122-.3-.25-.482-.38a4.322,4.322,0,0,0-.568-.351,3.882,3.882,0,0,0-.639-.26,2.328,2.328,0,0,0-.681-.1,3.61,3.61,0,0,0-.671.059,1.874,1.874,0,0,0-.552.19,1.044,1.044,0,0,0-.378.34.906.906,0,0,0-.141.514.91.91,0,0,0,.151.525,1.5,1.5,0,0,0,.454.411,4.176,4.176,0,0,0,.752.357q.449.168,1.044.362,1.147.379,2.116.8a7.136,7.136,0,0,1,1.672.985,4.066,4.066,0,0,1,1.1,1.358,4.248,4.248,0,0,1,.4,1.916A4.738,4.738,0,0,1,497.041-576.8Zm17.455,2.738a.529.529,0,0,1-.411.135h-3.106a.674.674,0,0,1-.384-.093.585.585,0,0,1-.211-.308q-.217-.553-.422-1.1t-.411-1.1H503.8q-.206.552-.417,1.1t-.417,1.1a.542.542,0,0,1-.552.4h-3.193a.53.53,0,0,1-.341-.108.257.257,0,0,1-.049-.325l5.876-15.215a.322.322,0,0,1,.07-.141.754.754,0,0,1,.147-.14.773.773,0,0,1,.184-.1A.519.519,0,0,1,505.3-590h2.77a.459.459,0,0,1,.314.114,1.393,1.393,0,0,1,.195.2l.271.617,5.681,14.653A.32.32,0,0,1,514.5-574.063Zm1.744-18.267a5.162,5.162,0,0,1-1.385-.184,5.054,5.054,0,0,1-1.238-.524,5.237,5.237,0,0,1-1.047-.813,5.169,5.169,0,0,1-.809-1.047,5.2,5.2,0,0,1-.521-1.238,5.188,5.188,0,0,1-.184-1.385,5.163,5.163,0,0,1,.184-1.377,5.2,5.2,0,0,1,.524-1.242,5.318,5.318,0,0,1,.813-1.054,5.056,5.056,0,0,1,1.051-.813,5.332,5.332,0,0,1,1.241-.524,5.091,5.091,0,0,1,1.385-.187,5.136,5.136,0,0,1,1.377.184,5.029,5.029,0,0,1,1.238.524,5.328,5.328,0,0,1,1.051.813,5.034,5.034,0,0,1,.813,1.054,5.4,5.4,0,0,1,.524,1.249,5.1,5.1,0,0,1,.187,1.388,5.117,5.117,0,0,1-.184,1.377,5.084,5.084,0,0,1-.523,1.238,5.3,5.3,0,0,1-.813,1.047,5.157,5.157,0,0,1-1.051.809,5.216,5.216,0,0,1-1.245.52A5.193,5.193,0,0,1,516.24-592.329Zm11.8,5.525a.564.564,0,0,1-.13.351.45.45,0,0,1-.378.167h-6.58v3.355h4.859a.536.536,0,0,1,.346.114.44.44,0,0,1,.141.363v2.586a.587.587,0,0,1-.124.352.4.4,0,0,1-.341.168h-4.88v4.956q0,.466-.5.466h-3.3a.41.41,0,0,1-.39-.455V-589.5a.494.494,0,0,1,.124-.357.438.438,0,0,1,.3-.141h10.356a.474.474,0,0,1,.373.14.547.547,0,0,1,.124.377Zm.84-6.11h-.659q-.15,0-.266-.252l-2.986-7.223-.8,7.611a.265.265,0,0,1-.3.3h-.707c-.208,0-.313-.1-.313-.3l1.075-9.5a.263.263,0,0,1,.1-.217.353.353,0,0,1,.224-.082h1.048a.306.306,0,0,1,.3.251l2.953,7.218,2.979-7.218a.376.376,0,0,1,.109-.187.253.253,0,0,1,.17-.064H532.9a.282.282,0,0,1,.221.088.309.309,0,0,1,.078.211l1.074,9.5a.265.265,0,0,1-.3.3h-.707c-.208,0-.312-.1-.312-.3l-.8-7.611-3,7.223C529.08-593,528.99-592.914,528.885-592.914Zm13.78,18.49a.267.267,0,0,1-.087.194c-.029.2-.177.3-.444.3H531.192a.5.5,0,0,1-.345-.114.444.444,0,0,1-.13-.352V-589.5a.515.515,0,0,1,.124-.362.452.452,0,0,1,.351-.135h10.737a.477.477,0,0,1,.368.14.53.53,0,0,1,.13.377v2.676a.56.56,0,0,1-.13.351.451.451,0,0,1-.378.167h-7.013v2.684h5.411a.57.57,0,0,1,.341.1.373.373,0,0,1,.135.325v2.337a.448.448,0,0,1-.119.292.429.429,0,0,1-.346.14h-5.421v2.77h7.272a.435.435,0,0,1,.487.5Zm.124-18.055h-6.544c-.2,0-.3-.1-.3-.286v-9.5c0-.208.1-.313.3-.313h6.517c.208,0,.313.108.313.326v.674a.341.341,0,0,1-.078.224.3.3,0,0,1-.249.1h-5.483v2.8h4.313a.326.326,0,0,1,.211.072.3.3,0,0,1,.088.242v.694a.339.339,0,0,1-.075.217.268.268,0,0,1-.224.1h-4.313v3.347h5.51a.279.279,0,0,1,.313.319v.7A.265.265,0,0,1,542.789-592.479Z" transform="translate(-451.766 643.243)" fill="#fac815" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div id="siteCv" class="elementPortfolio border blocHomeSafe html sass javascript">
                            <a href="#aPropos">
                                <h3>
                                    Site CV
                                </h3>
                                <p>Le site sur lequel vous êtes actuellement a été codé entièrement par mes soins.</p>
                            </a>
                        </div>
                    </div>
                    <!-- Div Projet final Lison -->
                    <div id="projetFinal" class="elementPortfolio border blocProjetFinal html bootstrap php mysql javascript">
                        <h3>
                            Projet final Lison
                        </h3>
                        <p>
                            Un site qui permet d'enregistrer ses films, séries et bande dessinées préférées et de les noter.
                        </p>
                    </div>
                    <!-- Div Hackaton + Exo Github -->
                    <div class="flex flex-direction-column">
                        <div id="hackathon" class="elementPortfolio border blocHackaton html php mysql javascript">
                            <a href="https://github.com/CaroCap/CoffeeWars" target="blank">
                                <h3>
                                    Hackathon
                                </h3>
                                <!-- //TODO mettre le h2 en italique -->
                                <h2>Coffee Wars</h2>
                                <p>Projet collectif codé en 3 jours</p>
                                <div id="imgHackathon">
                                    <img src="public/images/portfolioWebDev/coffeeWars.png" alt="Coffee Wars">
                                </div>
                            </a>
                        </div>

                        <div id="exercicesGithub" class="elementPortfolio border blocGithub html bootstrap php mysql javascript sass">
                            <h3>
                                Exercices Github
                            </h3>
                            <p>Exercices réalisés lors des cours de php, javaScript, NodeJs, html/css et bien d'autres !</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<!-- --------------- FIN PAGE WEBDEV --------------- -->