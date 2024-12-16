<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{
    if($_SESSION['usuario'] = "ok"){
        $nombreUsuario=$_SESSION["nombreUsuario"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Entrepaginas</title>
<!-- Etiquetas requeridas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!--Css bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    
<?php $url="http://".$_SERVER['HTTP_HOST']."/entrepaginas"  ?>
<nav class="navbar navbar-expand navbar-light bg-ligth">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del sitio web</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
    </div>
</nav>

<div class="container">
    <br>
    <div class="row">
    </div>
</div>
</body>
</html>
