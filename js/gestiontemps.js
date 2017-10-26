var monTitre = document.getElementsByTagName('h1')[0];
var compteur = 5;
var monPetitTimer = function () {
    if (compteur === 0) {
        clearInterval(idInterval);
        monTitre.textContent = "fin";
       
    } else {
        monTitre.textContent = compteur;
        compteur--; 
    }
};
var idInterval = setInterval(monPetitTimer, 1000);