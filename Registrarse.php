<html>

<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link real="stylesheet" href="C:\xampp\htdocs\Semantic-UI-CSS-master\semantic.css">
        <link rel="StyleSheet" href="estilo-registro.css" type="text/css">
        <link rel="StyleSheet" href="estilo-header.css" type="text/css">
</head>

<body>
<!--esta partecita de php es para llamar el archivo header
me explico, cree uno para en vez de repetir los mismos codigos tanto
en estilos como en estructura, que lo pueda llamar y sea el mismo en todas 
las paginas. Es una forma de ahorrar codigo y tiempo muchachon
METIENDO MANOO HAHAHA-->
<?php 
      require 'Conexion.php';

      /*cree esta variable y la deje vacia porque sera 
      llenada deacuerdo a la ejecucion de la consulta a 
      la base de datos*/
    $mensaje = '';


    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $mysql = "INSERT INTO informacion (nombre,email,password) VALUES (:nombre, :email, :password)";
        $estado = $conexion->prepare($mysql);
        $estado->bindParam(':nombre', $_POST['nombre']);
        /*segun investigue el metodo bindParam, es para vincular los
        parametros, entonces ahora le paso los campos de la tabla*/ 
        $estado->bindParam(':email', $_POST['email']);
        /*este metodo de password_hash pasa el dato que queremos cifrar con 
        la opcion PASSWORD_BCRYPT*/
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $estado->bindParam(':password', $password);
  
        if ($estado->execute()) {
            $mensaje = '<br><a href="Inicio.php"><font color="grey">Iniciar Sesión</font></a>';
        } else {
            $mensaje = '<br><font color="red">------------------------------------No se pudo registrar tu usuario--------------------------------------</font>';
        }
 
    }

?>
    
<div class="container">
    <div id="porsiaca">
    <div id="dev">
    <a href="Develops.php"><img src="Develops.png" height="20%" width="40%"></a>
    </div>

        <form action="Registrarse.php" method="post">   
        <div class="form-group">
                <input type="text" Placeholder="Nombre y Apellidos" aria-label="Nombre_y_Apellidos" class="form-control" id="nombre" name="nombre">
                <small class"form-text text-muted"><color text="white"><font color="#CECECE">-</font>Máximo de caracteres = 50</small>
            </div>
            
            <div class="form-group">
                <input type="email" Placeholder="Correo electrónico" aria-label="Correo_electrónic" class="form-control" id="email" name="email">
                <small class"form-text text-muted"><color text="white"><font color="#CECECE">-</font>Máximo de caracteres = 50</small>
            </div>
            
            
            <div class="form-group">
                <input type="password" Placeholder="Contraseña" aria-label="contraseña" class="form-control" id="password" name="password">
                <small class"form-text text-muted"><color text="white"><font color="#CECECE">-</font>Máximo de caracteres = 15</small>
                    <br>
            </div>
            <!--utilice esto para interpretar y mostrar por pantalla de que si el mensaje no esta vacio es porq ocurrio algo. #mecomistackoverflowyYoutubeconPhp 
        HAHAHAHAHAHAHAHA-->
        <?php if (!empty($mensaje)): ?>
        <p> <?= $mensaje ?> </p>
        <?php endif; ?>
          <button type="submit" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Registrarme">
            Registrarme
            </button>          
           
        </form> 
        
</div>
    </div>
    
</body>

</html>