<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVA PUBLICACION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/newPost.js"></script>
</head>

<body>
    <div class="container" id="central_form">
        <form class="basicForm">

            <div class="header">
                <h2 class="text-light">Nueva Publicación</h2>
            </div>
            <br>
            <div style="display: flex;justify-content: center;">
                <div id="form_body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="titulo" placeholder="Titulo" maxlength="30" name="titulo" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea class="form-control" id="contenido" name="contenido" rows="5" placeholder="Escriba su texto"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <input type="button" class="btn btn-success btn-lg" value="Crear" id="input" onclick="createPost()">
                <button class="btn btn-danger btn-lg" onclick='window.open("/myPosts","_self")'>Cancelar </button>
            </div>


        </form>
    </div>
</body>

</html>