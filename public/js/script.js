 // arriver diretement sur section "aPropos" à l'ouverture de la page
 if (document.location.hash === '') {
     document.location.hash = '#aPropos';
 }

 /* ####################### PORTFOLIO ARTISTIQUE ####################### */

 /* CANVAS */


 var canvas = document.getElementById("canvasLigneTemps");
 var ctx = canvas.getContext("2d");


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

 /* Carte contact toggle */


 function toggle_contact() {
     /* var carteContact = document.getElementById("carteContact");
     carteContact.toggleClass("displayNone"); */

     $('#carteContact').toggleClass("displayNone");
     console.log("display none de la fonction toggle contact");
 }



 /* Pour la petite croix de la carteContact //TODO  insérer la fonction dans le html */

 function closeContact() {
     var carteContact = document.getElementById("carteContact");
     carteContact.classList.toggle("displayNone");
     console.log("display none de la croix");

 }

 /* Le tri du Portfolio */

 /* Au clic du bouton de l'id "html", exécute ceci: */
 $("button" [id = "html"]).click(function() {

     /* Ajoute la classe "selection" à toutes les div de la classe "html" */
     $("div.html").toggleClass("selection");

 })