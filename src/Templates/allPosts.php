<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODAS LAS PUBLICACIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/showAllPosts.js"></script>
</head>

<body onload="getPosts()">
    <div class="container" id="central_form">
        <div class="basicForm">
            <div class="upperHeader">
                <button class="btn btn-primary btn-lg" onclick='window.open("/myPosts","_self")'>Mis publicaciones</button>
                <button class="btn btn-info btn-lg" onclick="quitSession()">Cambiar de usuario</button>
            </div>
            <div class="header">
                <h2 class="text-light">Publicaciones de todos</h2>
            </div>

            <div class="showPostsBody" id="showPostsBody">
            </div>

        </div>
    </div>
</body>

</html>