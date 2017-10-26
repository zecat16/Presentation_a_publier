var premier = document.getElementById("premier");
console.log(premier);


/*var paragrapheClasses = document.getElementsByClassName("myCLASS");
console.log(paragrapheClasses);*/



// function verification(trucAVerif) {
    // exo 1 : le code est 007
/*    var ctl = false;
    console.log(trucAVerif);
    if (trucAVerif === '007') {
        ctl = true;
     }
    return ctl;*/
    // exo2: le code est > 10
/*    var ctl = false;
    console.log(trucAVerif);
    if (trucAVerif > 10) {
        ctl = true;
     }
    return ctl;*/    
    // exo3 : le code est multiple de 3
/*    var ctl = false;
    var inputMod = trucAVerif%3;
    console.log(trucAVerif);
    if (inputMod === 0) {
        ctl = true;
    }
    return ctl; */   
    // exo4 : le code est multiple de 5 et > 505
/*    var ctl = false;
    var inputMod = trucAVerif%5;
    console.log(trucAVerif);
    if (inputMod === 0 && trucAVerif > 505) {
        ctl = true;
    }
    return ctl;  */   
    // exo5 : le code est divisible par 3 , 5 , et compris entre 100 et 200
/*    var ctl = false;
    var mult3 = trucAVerif % 3 === 0;
    var mult5 = trucAVerif % 5 === 0;
    var intervalle = trucAVerif >= 100 && trucAVerif <= 200;
    console.log(trucAVerif);
    console.log(mult3);
    console.log(mult5);
    console.log(intervalle);
    
    if (mult3 && mult5 && intervalle) {
        ctl = true;
    }
    return ctl;*/     
    // exo6 : le code se termine par 7
//    console.log(trucAVerif);
/*    var verifString = trucAVerif.toString();
    var position = verifString.indexOf("7",2);
    console.log(position);
    if (position === 2) {
        return true;
    } else {
        return false;
    }*/
    
    // exo7 : le code est multiple de 3 ou 7 , se termine par un 8 et doit être compris entre 138 et 478
/*    var multiple = trucAVerif % 3 === 0 || trucAVerif % 7 === 0;
    var termine = trucAVerif %10 === 8;
    var intervalle = trucAVerif > 138 && trucAVerif < 478;
    if (multiple && termine && intervalle) {
        return true;
    } else {
        return false;
    } 
    
    
    //return true;
    
}

function generateur() {
    for (var i = 0; i < 1000; i++) {
        if(verification(i)) {
            console.log("Résultat : " + i );
        }
    }
}
generateur();


function demanderMDP() {
    var input = prompt('code secret? 3 chiffres');
    // La fct match comporte une expression régulière : ensemble de symboles qui veulent dire qu'une string doit respecter un certain schéma ( ici , 3 chiffres )
    if (input.match(/\d{3}$/) && verification(input)) {
        alert("BRAVO !");
    } else {
        demanderMDP();
    }
}



demanderMDP();*/

