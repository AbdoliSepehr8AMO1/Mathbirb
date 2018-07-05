//getallen die deelbaar door 1 en zich zelf zijn
// invoer: decimaal getallen
// uitvoer: de resultaat

/* vibonacci reeks */
var teller = 0; 
var getal = 0;
var getal2 = 1;
var resultaat;
var eindgetal; 
var interval; 
var header = 3;
/* checkt of het een getal tussen 5 / 250 is */
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
/* zet een interval voor de antwoorden */
function StartInterval() {
        interval = setInterval(function () { BerekenReeks() }, 250);
    }
/* berekent welke getallen in de rij van fibonnaci zitten tot aangegeven getal */
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
/*code voor priemgetal */
function Primes() {
  for(i=2;i<=100;i++){
    var isPrime = true;
    for(var x = 2; x < i; x++){
      if (i % x == 0){
        isPrime = false;
      }
    }
    if(isPrime == true){
      document.getElementById('dPrimes').innerHTML += i + "<br />";
    }
  }
}
