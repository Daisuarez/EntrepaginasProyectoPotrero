<?php
session_start();
if($_POST){
    if ($_POST['usuario'] == "entrepaginas" && $_POST['contrasenia'] == "sistema") {
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "entrepaginas";
       header('Location:inicio.php');
    }else{
        $mensaje="Error: El usuario o contraseña son incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br/><br/><br/>

                <div class="card">
                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">

                        <!-- Mostrar el mensaje de error si existe -->
                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>

                        <!-- Formulario de login -->
                        <form method="post"> <!-- Se corrige el método a "post" -->
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su usuario" required>
                            </div>

                            <div class="form-group">
                                <label for="contrasenia">Contraseña</label>
                                <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Ingrese su contraseña" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar a la administración</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>