 // arriver diretement sur section "aPropos"
 if (document.location.hash === '') {
     document.location.hash = '#aPropos';
 }

 /* Carte contact toggle */


 function toggle_contact() {
     var carteContact = document.getElementById("carteContact");
     /*    carteContact.classList.toggle("display"); */

     if (carteContact.style.height === "55vh") {
         carteContact.style.display = "none";
         console.log("If");

     } else {
         carteContact.style.height = "55vh";
         carteContact.style.display = "block";
         console.log("Else");

     }
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