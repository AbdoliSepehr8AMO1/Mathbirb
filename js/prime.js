function calcPrimes(){
    var max = document.getElementById('ipPrimeNumber').value;
    for(var i = 2; i <= max; i++){
        var IsPrime = true;
        
         for(var x = 2; x < i; x++){
             
            if(i % x == 0){
               IsPrime = false;
            }   
         }
        if(IsPrime == true){
           document.getElementById('dPrimes').innerHTML += i + "<br />";
           }
    }  
}