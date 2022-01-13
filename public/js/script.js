// arriver diretement sur section "aPropos" à l'ouverture de la page
if (document.location.hash === '') {
    document.location.hash = '#aPropos';
}

/* ####################### PORTFOLIO ARTISTIQUE ####################### */

/* CANVAS */


/* var canvas = document.getElementById("canvasLigneTemps");
var ctx = canvas.getContext("2d"); */


/* Responsive canvas: height & width */

/* var heightRatio = 1.5;
canvas.height = canvas.width * heightRatio; */

/* La ligne du temps */

/*  ctx.fillRect(0, 0, 0.5, 500);
 ctx.fillRect(150, 0, 0.5, 500); */

/* ctx.beginPath()
ctx.moveTo(0, 0)
ctx.lineTo(0, 100)
ctx.stroke()
ctx.closePath()
ctx.strokeStyle("black") */


/* Ceinture de sécurité //TODO Debugg: Lorsqu'on la met, les fonctions à l'intérieur ne fonctionnent plus
$(document).ready(function() {}) */


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

/*  function btnHtml(){

    
 }) */

/* //TODO Question: pourquoi il ne veut pas prendre les attributs $ en dehors des fonctions ? */
console.log(html);

function toggleHtml() {
    $("div.html").toggleClass("selection");
    console.log("div html selection");

    /* Ajoute la classe "display-none" aux autres div */
    /*  $("div:not('.html')").toggleClass("displayNone"); */
}

html.click, (function() {
    console.log("bouton dont l'id est html");

    /* Ajoute la classe "selection" à toutes les div de la classe "html" */
    $("div.html").toggleClass("selection");
    console.log("div selection");

    /* Ajoute la classe "display-none" aux autres div */
    $("div:not('.html')").toggleClass("displayNone");

})