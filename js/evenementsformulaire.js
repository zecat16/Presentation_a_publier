var monInput1 = document.getElementsByTagName('input')[0];
var monInput2 = document.getElementsByTagName('input')[1];
    
monInput1.addEventListener('change', function (event) {
    console.log('Dans le champ de saisie : ' + monInput1.value);
});

var monForm = document.getElementsByTagName('form')[0];
monForm.addEventListener('submit', function (event) {
    if (monInput1.value.length > 6) {
        alert('envoyé');
    } else {
        event.preventDefault();
        monInput1.style.borderColor = "red";
        alert('votre nom doit faire plus de 6 caractères');
    }
    // empeche l'action d'envoi vers le serveur et donc le raffraichissement de la page

//    console.log(monInput1.value + ' et ' + monInput2.value);
});

monInput1.addEventListener('keyup', function (event) {
    if (monInput1.value.length > 3) {
        monInput1.style.borderColor = ""; 
    } else {
        monInput1.style.borderColor = "red";        
    }
});