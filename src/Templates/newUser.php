<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO USUARIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/newUser.js"></script>
</head>

<body>
    <div class="container" id="central_form">
        <form class="basicForm">
            <div class="form-group">
                <h2 class="text-light">Creación de usuario</h2>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" maxlength="50" name="nombre" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" maxlength="50" name="apellido"required>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="inserta@tuEmail.test" maxlength="255" name="email"required>
            </div>
            <br>
            <div class="form-group">
                <input type="button" class="btn btn-success btn-lg" value="Crear" id="input" onclick="createUser()">
                <button class="btn btn-danger btn-lg" onclick='window.open("/","_self")'>Cancelar </button>
            </div>
        </form>
    </div>
</body>

</html>