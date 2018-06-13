function genereerTafel() {
    var resultaatElement = document.getElementById('tafel-resultaat');
    var max = document.getElementById('tafel-max').value;
    var basis = document.getElementById('tafel-basis').value;
    var factor = 1;

    resultaatElement.innerHTML = "";

    while(factor <= max) {
        var antwoord = factor * basis;
        var resultaatHTML = factor + " x " + basis + " = " + antwoord + "<br>";
        resultaatElement.innerHTML = resultaatElement.innerHTML + resultaatHTML;
        factor++;

    }

    return false; // We willen een data versturen naar de server.
}
