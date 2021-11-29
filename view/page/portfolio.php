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

<h1>Coucou test</h1>


<!-- --------------- PAGE PORTFOLIO ARTISTIQUE --------------- -->
<section id="portfolioArtistique">
    <!-- ////////////// Bloc noir de contact ////////////// -->

    <div>
    </div>

    <!-- ////////////// FIN Bloc noir de contact ////////////// -->


    <!-- ////////////// Les projets artistiques (ligne du temps) ////////////// -->

    <div></div>

    <!-- ////////////// FIN Les projets artistiques (ligne du temps) ////////////// -->

</section>
<!-- --------------- FIN PAGE PORTFOLIO ARTISTIQUE --------------- -->

<!-- --------------- PAGE A PROPOS (bloc principal)--------------- -->

<section id="aPropos">
    <!-- div du haut (top et left à ajuster pour centrer): titre cliquable vers l'ancre "portfolio artistique" -->
    <div>
        <a href="#portfolioArtistique">ART</a>
    </div>

    <!-- div du milieu FLOAT (top et left à ajuster): Contact, "Lison Ferné" et image Lison + "Formation" -->
    <div>
        <div> <!-- FLOTTE -->
            <div>
                <a href="#contact">Contact</a>
            </div>

            <!-- Panneau déroulant au clic (js) -->
            <div id="carteContact">
                <!-- Les icones dans une div flottante -->
                <div> <!-- div parente flottante -->
                    <div> <!-- flotter à gauche -->
                        Les icones
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-tumblr"></i>
                        <i class="fab fa-wix"></i>
                    </div>
                    <div> <!-- flotter à droite-->
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div>
                    <a href="">Mail</a> <br>
                    Née le 22 avril 1993
                </div>
                <div>Image poissons bottom</div>
            </div>
        </div>
        <div> <!-- FLOTTE -->
            <a href="#">
                <img src="public/images/textes/signatureLison.png" alt="Lison Ferné">
            </a>
        </div>
        <div> <!-- FLOTTE -->
            <a href="#formation">
            <img class="portraitLison" src="public/images/aPropos/portraitLison.png" alt="Lison Ferné">Formation + image</a>
        </div>
    </div>

    <!-- div du bas "Développement Web" -->
    <div>
        <a href="#competences">Développement Web</a>
    </div>
</section>
<!-- --------------- FIN PAGE A PROPOS (bloc principal)--------------- -->


<!-- --------------- PAGE FORMATION (float avec "A propos") --------------- -->

<section id="formation"></section>

<!-- --------------- FIN PAGE FORMATION --------------- -->


<!-- --------------- PAGE WEBDEV --------------- -->

<section id="webdev">
    <!-- ////////////// Compétences ////////////// -->

    <div id="competences">
        <div>
            <!-- Float -->
            <div>Panneau contact</div>
            <div>Bloc des compétences</div>
            <div>Fil d'ariane</div>
        </div>
        <div>
            <a href="#portfolioWebDev">Portfolio</a>
        </div>
    </div>

    <!-- ////////////// Portfolio WebDev ////////////// -->

    <div id="portfolioWebDev">
        <div>
            <!-- Float -->
            <div>Menu des languages de programmation</div>
            <div>Bloc portfolio</div>
            <div>Fil d'ariane</div>
        </div>
        <div>
            <a href="#aPropos">à propos</a>
        </div>
    </div>
</section>

<!-- --------------- FIN PAGE WEBDEV --------------- -->