function getPostsByUser(id) {
	var xhttp = new XMLHttpRequest();
	var url = '/posts/user/'+id;

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
                            +'<button type="button" class="btn btn-danger"'
                            +'onclick="deletePost('+data[i].id+')"><i class="fa fa-trash" aria-hidden="true"></i></button>'
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
function getUserPosts(){
    let id = sessionStorage.getItem("user");
    getPostsByUser(id);
}
function deletePostById(id){
    var xhttp = new XMLHttpRequest();
	var url = '/post/'+ id;

	xhttp.open('DELETE', url, true);
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			let json_response = JSON.parse(this.responseText);
            alert(json_response.message);
		}
	};
	xhttp.send();
}
function deletePost(id){
    deletePostById(id);
    setTimeout(getUserPosts,2000);
}