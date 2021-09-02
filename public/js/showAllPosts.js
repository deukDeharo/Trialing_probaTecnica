function getPosts() {
	var xhttp = new XMLHttpRequest();
	var url = '/posts';

	xhttp.open('GET', url, true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			let json_response = JSON.parse(this.responseText);
			let data = json_response.data;
			document.getElementById("showPostsBody").innerHTML = "";
			for (let i = 0; i < data.length; i++) {
                let posts = '<br><div class="card">'
                            +'<h5 class="card-header">'+ data[i].titulo +'</h5>'
                            +'<div class="card-body">'
                            +'<p class="card-text">'
                            +data[i].contenido+'</p>'
                            +'<p class="text-muted">Creado a las '+data[i].fecha_creacion+'</p>'
                            +'</div></div>';
                document.getElementById("showPostsBody").innerHTML += posts;
			}

		}
	};
	xhttp.send();
}
function quitSession() {
    sessionStorage.removeItem('user');
    window.open("/", "_self");
}
