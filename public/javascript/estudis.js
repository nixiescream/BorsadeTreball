var ajx;
var resposta;

function carregarElements(tipus) {
    url = "estudisSecundaris.php?tipus=" + tipus;

    if (window.XMLHttpRequest || typeof(XMLHttpRequest) != undefined){
        ajx = new XMLHttpRequest();
    } else if (window.ActiveXObject){
        ajx = new ActiveXObject("Microsoft.XMLHTTP");
    } else{
        alert("Tu navegador no soporta AJAX");
    }

    ajx.onreadystatechange = finCarga;
    ajx.open("GET", url, true);
    ajx.send();
}

function finCarga() {
    if (ajx.readyState == 4) {
        console.log(url);
        if (ajx.status == 200) {
            resposta = ajx.responseXML.getElementsByTagName("item");
            procesaElements();
        } else {
            alert(ajx.status + " " + ajx.statusText);
        }
    }
}

function procesaElements() {
    llistaSec = document.getElementById("menu2");
    for (i = 0; i < resposta.length; i++) {
        var opc = document.createElement("option");
        opc.text = resposta[i].childNodes[0].nodeValue;
        opc.value = resposta[i].childNodes[0].nodeValue;
        llistaSec.options.add(opc);
    }
}
