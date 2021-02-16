function loadListAccommodation(){
    var dateArrival = document.getElementById("dateArrival");
    var dateDeparture = document.getElementById("dateDeparture");

    var xhr = new XMLHttpRequest();
    xhr.open("GET","selectlistAccommodation.php?dateArrival=" + dateArrival.value+ "&dateDeparture=" + dateDeparture.value);
    xhr.onreadystatechange=function(ev){
        if(this.status == 200 && this.readyState == 4){
            divList.innerHTML = this.responseText;
        }
    }
    xhr.send();
}

window.onload=function (ev) {
    divList=document.getElementById("listAccommodation");
}