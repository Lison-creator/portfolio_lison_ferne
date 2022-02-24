// Arriver diretement sur section "aPropos" à l'ouverture de la page
if (document.location.hash === '') {
    document.location.hash = '#aPropos';
}

/* ####################### PORTFOLIO ARTISTIQUE ####################### */

/* Carte contact toggle: pour le bouton contact & la petite croix */

function toggle_contact() {

    $("#carteContact").slideToggle();
    console.log("le bouton contact");
}


/* Le tri du Portfolio */

/* Au clic du bouton de l'id "html", exécute ceci: */
var tous = document.getElementById("tous");
var html = document.getElementById("html");
var bootstrap = document.getElementById("bootstrap");
var sass = document.getElementById("sass");
var php = document.getElementById("php");
var javascript = document.getElementById("javascript");
var mysql = document.getElementById("mysql");


console.log(html);

function toggleHtml() {
    $("div.html").toggleClass("selection");
    console.log("div html selection");

    /* Ajoute la classe "display-none" aux autres div */
    /* $("div:not('.html')").toggleClass("displayNone");
     */

}

function renduBlocPortfolio() {
    $(".elementPortfolio").removeClass('selection');

    $('#menuPortfolio>div>div').each((index, element) => {
        if ($(element).hasClass('selection')) {
            const elementSelected = $(element).attr('id');

            $('.elementPortfolio').each((i2, child) => {
                if ($(child).hasClass(elementSelected)) {
                    $(child).addClass('selection');
                }
            })
        }
    });
}

function toggleHtml() {
    $("#html").toggleClass("selection");
    renduBlocPortfolio();
}

function toggleBootstrap() {
    $("#bootstrap").toggleClass("selection");
    renduBlocPortfolio();
}

function toggleSass() {
    $("#sass").toggleClass("selection");
    renduBlocPortfolio();
}

function togglePhp() {
    $("#php").toggleClass("selection");
    renduBlocPortfolio();
}

function toggleJavascript() {
    $("#javascript").toggleClass("selection");
    renduBlocPortfolio();
}

function toggleMysql() {
    $("#mysql").toggleClass("selection");
    renduBlocPortfolio();
}
