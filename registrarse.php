<html>
    <head>
        <title>P&aacute;gina de inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row text-center">
            <h3>Registrar usuario</h3>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <form action="registro.php" method="post">
                    <div class="row mb-2">
                        <label for="nameUser">Usuario: </label>
                        <input type="text" name="nameUser" pattern=".{6,30}" title="El nombre de usuario debe tener entre 6 y 30 caracteres" required><br>
                    </div>
                    <div class="row mb-2">
                        <label for="contraseñaUsuario">Contraseña: </label>
                        <input type="password" name="passwordUser" pattern=".{8,15}"
                                title="Su contraseña debe ser entre 8 y 15 caracteres" required><br>
                    </div>
                    <div class="row mb-2">
                        <label for="contraseñaConfirmación">Confirme contraseña: </label>
                        <input type="password" name="confPassUser" pattern=".{8,15}"
                                title="Su contraseña debe ser entre 8 y 15 caracteres" required><br>
                    </div>
                    <div class="row mb-2">
                        <label for="contraseñaConfirmación">Correo: </label>
                        <input type="email" name="email"><br>
                    </div>
                    <div class="mb-2">
                            <input type="checkbox" name="términos" required>
                            <label for="términos">Acepto los términos de confidencialidad.</label>
                    </div>
                    <div class="row mb-2">
                        <input type="submit" value="Registrarse" class="btn btn-primary">
                    </div>
                </form>
                <div class="text-center">
                        ¿Ya tiene una cuenta? <a href="index.php">Acceda</a>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </body>
</html>