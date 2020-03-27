<?php 

/*A continuacion esto espara ver si existe la sesion
y luego iniciar*/

session_start();

require 'Conexion.php';

if (isset($_SESSION['user_nombre'])) {
    header('location: /proyecto final');
}



if (isset($_SESSION['user_nombre'])){
$resultados = $conexion->prepare('SELECT nombre, email, password FROM informacion WHERE nombre = :nombre');
$resultados->bindParam(':nombre', $_SESSION['user_nombre']);
$resultados->execute();
$Rfinal = $resultados-> fetch(PDO::FETCH_ASSOC);

$user = null;

if (count($Rfinal) > 0){
    $user = $Rfinal;
    }
}

?>

<html>
<head>
<link rel="StyleSheet" href="estilo-develops.css" type="text/css">
</head>

<body>

<!--esta partecita de php es para llamar el archivo header
me explico, cree uno para en vez de repetir los mismos codigos tanto
en estilos como en estructura, que lo pueda llamar y sea el mismo en todas 
las paginas. Es una forma de ahorrar codigo y tiempo muchachon
METIENDO MANOO HAHAHA-->
<?php require 'header.php' ?>


<?php if(!empty($user)): ?>
    <br>welcome. <?= $user['email']?>
    <br>Estas adentro
    <a href="salir.php">Salir</a>
<?php else: ?>
    <h1>Entrar denuevo</h1>

    <a href="iniciar sesion.php">Inicicar sesion</a>o
    <a href="registrarse.php">Registrarse</a>o
<?php endif;?>
    </body>
</html>