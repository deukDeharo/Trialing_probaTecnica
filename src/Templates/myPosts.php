<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS PUBLICACIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/showPosts.js"></script>
</head>

<body onload="getUserPosts()">
    <div class="container" id="central_form">
        <div class="basicForm">
            <div class="upperHeader">
                <button class="btn btn-success btn-lg" onclick='window.open("/newPost","_self")'>Crear Publicación </button>
                <button class="btn btn-primary btn-lg" onclick='window.open("/allPosts", "_self")'>Todas las publicaciones</button>
                <button class="btn btn-info btn-lg" onclick="quitSession()">Cambiar de usuario</button>
            </div>
            <div class="header">
                <h2 class="text-light">Mis publicaciones</h2>
            </div>
            <div class="showPostsBody" id="showPostsBody">
                

            </div>

        </div>
    </div>
</body>

</html>