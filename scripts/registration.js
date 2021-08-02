function loadFields(userId){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "fields.php?user_id=" + userId);
    xhr.onreadystatechange = function (ev) {
        if(this.status == 200 && this.readyState == 4){
            divFields.innerHTML = this.responseText;
        }
    }
    xhr.send();
}

window.onload = function (ev) {
    divFields = document.getElementById('fields');
}

function loadNewFields(selectList) {
    loadFields(selectList.value);
}