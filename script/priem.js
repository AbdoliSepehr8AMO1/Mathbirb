//getallen die deelbaar door 1 en zich zelf zijn
// invoer: decimaal getallen
// uitvoer: de resultaat


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
