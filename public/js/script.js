 // arriver diretement sur section "aPropos"
 if (document.location.hash === '') {
     document.location.hash = '#aPropos';
 }

 /* Carte contact toggle */

 /* //TODO debugguer: pourquoi la boucle ne fonctionne pas ? voir sur la carte de HOME SAFE */

 function toggle_contact() {
     var carteContact = document.getElementById("carteContact");
     /*    carteContact.classList.toggle("display"); */

     if (carteContact.style.display === "55vh") {
         carteContact.style.display = "none";
         console.log("If"); //TODO /* à enlever */

     } else if (carteContact.style.display === "none") {
         carteContact.style.height = "55vh";
         console.log("Else if"); //TODO /* à enlever */
     } else {
         console.log("else tout seul"); //TODO /* à enlever */
     }
     /* console.log(carteContact.style.display); */
 }

 console.log("Coucou, ça marche ?");

 /* Jouer sur la height pour l'effet toggle */
 /*  function openContact() {
      var carteContact = document.getElementById("carteContact");
      carteContact.style.height = "55vh";
  } */

 /* Pour la petite croix de la carteContact */

 function closeContact() {
     var carteContact = document.getElementById("carteContact");
     carteContact.style.display = "none";
 }