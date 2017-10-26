console.log('le fichier est chargé');

/* demande à l'utilisateur :
 Couleur du titre
 Couleur du sous-titre
 Couleur du paragraphe
 Le texte arrive en français , donc il faudra le traduire en anglais pour pouvoir l'appliquer au style ( bleu , rouge , vert )
 ---
  - créer une fonction de traduction simple */

function traduction(colorInput) {
    switch (colorInput) {
    case "rouge":
        return "red";
    case "bleu":
        return "blue";
    case "vert":
        return "green";
    default:
        return "black"; 
    }
}


  //- créer les trois demandes (prompt)

var coulTitre = prompt("Quelle est la couleur du titre ?");
var coulSousTitre = prompt("Quelle est la couleur du sous-titre ?");
var coulParagraphe = prompt("Quelle est la couleur du paragraphe ?");

  //- appliquer le style aux bons éléments HTML

var tousTitres = document.getElementsByTagName('H1');
console.log(tousTitres);
traduction(coulTitre);
var tousSousTitres = document.getElementsByTagName('H2');
console.log(tousSousTitres);
traduction(coulSousTitre);
var tousParagraphes = document.getElementsByTagName('p');
console.log(tousParagraphes);
traduction(coulParagraphe);

tousTitres[0].style.color = traduction(coulTitre);
tousSousTitres[0].style.color = traduction(coulSousTitre);
tousParagraphes[0].style.color = traduction(coulParagraphe);




