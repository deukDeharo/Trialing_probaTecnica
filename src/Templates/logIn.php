<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIA SESION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/login.js"></script>
</head>

<body onload="loadDoc()">
    <div class="container" id="central_form">
        <form class="basicForm"">
            <div class="form-group">
                <h2 class="text-light">Selecciona tu usuario</h2>
            </div>
            <div class="form-group" id="bodyForm">
                <ul class="list-group" id="users"></ul>
            </div>
            <br>
            <div class="form-group">
                <input type="button" class="btn btn-success btn-lg" value="Crear usuario" id="input" onclick="newUser()">
            </div>
        </form>
    </div>
</body>

</html>