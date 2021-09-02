
function loadDoc() {
	sessionStorage.removeItem('user');
	var xhttp = new XMLHttpRequest();
	var url = '/users';

	xhttp.open('GET', url, true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			let json_response = JSON.parse(this.responseText);
			let data = json_response.data;
			document.getElementById("users").innerHTML = "";
			for (let i = 0; i < data.length; i++) {
				let option_list = '<li class="list-group-item d-flex justify-content-between align-items-center">'
								+'<button type="button" id="'+data[i].id+'" class="btn btn-dark" onclick="enterWith('+data[i].id+')">'+data[i].email + "</button>"
								+'<button type="button" class="btn btn-danger" onclick="deleteButton('+data[i].id +')"><i class="fa fa-trash" aria-hidden="true"></i></button></li>';
				 document.getElementById("users").innerHTML += option_list;
			}

		}
	};
	xhttp.send();
}
function newUser(){
	window.location.href="/newUser";
	window.close();
}
function deleteUser(id){
	var xhttp = new XMLHttpRequest();
	var url = '/user/'+ id;

	xhttp.open('DELETE', url, true);
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			let json_response = JSON.parse(this.responseText);
            alert(json_response.message);
		}
	};
	xhttp.send();
}
function deleteButton(id){
	deleteUser(id);
	setTimeout(loadDoc,1000)
}

function enterWith(id){
	sessionStorage.setItem('user',id);
	window.open("/allPosts","_self");
}
