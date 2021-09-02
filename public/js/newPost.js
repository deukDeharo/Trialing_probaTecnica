function getValues() {
    let form_values = document.getElementsByClassName("form-control");
    let values = [];
    for (var i = 0; i < form_values.length; i++) {
        values[form_values[i].name] = form_values[i].value;
    }
    values["user_id"]=sessionStorage.getItem("user");
    return values;
}

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    var url = '/post';

    xhttp.open('POST', url, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            let json_response = JSON.parse(this.responseText);

            alert(json_response.message);

        }
    };
    var formValues = getValues();
    var params = 'titulo=' + formValues['titulo'] + '&';
    params += 'contenido=' + formValues['contenido'] + '&';
    params += 'user_id=' + formValues['user_id'];
    xhttp.send(params);
}
function createPost() {
    loadDoc();
    setTimeout(window.open("/myPosts","_self"),1000);
}