function getValues() {
    let form_values = document.getElementsByClassName("form-control");
    let values = [];
    for (var i = 0; i < form_values.length; i++) {
        values[form_values[i].name] = form_values[i].value;
    }
    return values;
}

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    var url = '/user';

    xhttp.open('POST', url, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            let json_response = JSON.parse(this.responseText);

            alert(json_response.message);

        }
    };
    var formValues = getValues();
    var params = 'nombre=' + formValues['nombre'] + '&';
    params += 'apellido=' + formValues['apellido'] + '&';
    params += 'email=' + formValues['email'];
    xhttp.send(params);
}
function createUser() {
    loadDoc();
    window.location.href = "/";
    window.close();
}