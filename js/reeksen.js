/* vibonacci reels */
var teller = 0; 
var getal = 0;
var getal2 = 1;
var resultaat;
var eindgetal; 
var interval; 
var header = 3;
function PromptEindgetal() {
    eindgetal = prompt("Voer een eindgetal in. Letop! eindgetal waarde moet tussen de 5 en 250 liggen.");
    if (eindgetal != "") {
        if ((eindgetal >= 5) && (eindgetal <= 250)) {
            StartInterval();
        } else {
            alert("De ingevoerde eindgetal is niet correct");
        }
    } else {
        alert("Je hebt geen eindgetal ingevoerd!");
    }
}
function StartInterval() {
        interval = setInterval(function () { BerekenReeks() }, 250);
    }
function header(){
        if ( (resultaat === 3) || (getal === 3) || (getal2 === 3) ) {
           document.getElementById('dReeks').innerHTML = ' 0 </br> 1 </br> 1 </br> 2<h3> 3 </h3>';
        }
    else {
        
    }

}
function BerekenReeks() {
        if (teller <= eindgetal) {
            document.getElementById('dReeks').innerHTML += getal + " </br> ", getal2 + " </br> ",resultaat ;
            teller++;
            resultaat = getal;
            getal = getal + getal2;
            getal2 = resultaat;
        } else {
            clearInterval(interval);
        }
}
/* priemgetallen */
function primeInterval(){
    interval = setInterval(function () { calcPrimes() }, 250);
}
function calcPrimes(){
    primeInterval();
    var max = document.getElementById('number').value;
    for(var i = 2; i <= max; i++){
        var IsPrime = true;
        
         for(var x = 2; x < i; x++){
             
            if(i % x == 0){
               IsPrime = false;
            }   
         }
        if(IsPrime == true){
           document.getElementById('output').innerHTML += i + "<br />";
           }
    }  
}