<html= lang="en">

<head>
    <title>Iniciar sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="StyleSheet" href="sesion.css" type="text/css">
</head>

<body>
    

<?php
 
 /*---------IMPORTANTEEEEE-------Muchachon, aqui inice la sesion y llame al archivo donde esta la database conection,
 pero, el problema que me da es que el siguiente bloque de codigo enuelto en comentario, al principio
 me daba bienn, pero luego me presento un error y no logre quitarlo. Pero estoy seguro que el codigo funciona, 
 es un UNEXCEPTED ENDLINE ERROR, (osea por mas que lo cambio es algo fuera del codigo de conexio)
 (Si se fija, esta bien escrito en relacion a los otros documentos.php conectados.)

session_start();
require 'Conexion.php';


/*
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $resultados = $conexion->prepare('SELECT nombre, email, password FROM informacion WHERE email=:email');
    $resultados->bindparam(':email', $_POST['email']);
    $resultados->execute();
    $Rfinal = $resultados->fetch(PDO::FETCH_ASSOC);

    $mensaje = '';

    if (count($Rfinal) > 0  &&  password_verify($_POST['password'], $Rfinal['password'])) {
        $_SESSION['user_email'] = $Rfinal['email'];

        header('location: /proyecto final');
    } else {
        $mensaje = 'Error de inicio de sesion';
}
?> */
?>
    <!--formulario de inicio de sesion-->
    <div class="container">
        <div id="porsiaca">
            <div id="dev">
                <a href="inicio.php"><img src="Develops.png" height="20%" width="40%"></a>
            </div>

            <form action="iniciar sesion.php" method="post">
                <div class="form-group">
                    <input type="mail" Placeholder="Usuario" aria-label="Usuario" class="form-control" id="email" name="email">
                    <small class"form-text text-muted">
                        <color text="white">
                            <font color="#CECECE">-</font>Email o nombre de usuario
                    </small>
                </div>

                <div class="form-group">
                    <label for="clave"></label>
                    <input type="password" Placeholder="Contraseña" aria-label="contraseña" class="form-control" id="password" name="password">
                    <small class"form-text text-muted">
                        <br>
                        <Input type="checkbox" value="checkbox"> Recordar contraseña </button>
                </div>
                <button type="submit" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Iniciar sesion">
                    <a href="develops.php">
                        <font color="white"> Iniciar </font>
                    </a>
                </button>
                <p> Registrarse <a href="Registrarse.php" target="_blank">
                        <font color="grey">(Obligatorio)</font>
                    </a>
                </p>
            </form>
        </div>
    </div>
    <?Php if (!empty($mensaje)) : ?>
        <p> <?= $mensaje ?> </p>
    <?php endif; ?>
  
</body>

    </html>