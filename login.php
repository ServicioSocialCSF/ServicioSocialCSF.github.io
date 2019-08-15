<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>	
	<title>inscripcion</title>
    </head>
    <body>
        <div class='centrar'>
            <div>
                <h2 class="text-center">Ingresar</h2>
                <?php
                    session_start();
                    if(isset($_SESSION['Nomina']))
                        header("Location: index.php");

                    if (isset($_POST['submit']))
                    {
                        require('funciones/sesion.php');
                        $usuario=$_POST["usuario"];
                        $contrasena=$_POST["contrasena"];
                        $existe=iniciarSesion($usuario,$contrasena);
                    }
                ?>
                <form action="" method="post" >
                    <div class='centrar'>
                        <div><input name="usuario" type="text" placeholder="Matricula"></div>
                        <div><input name="contrasena" type="password" placeholder="Contraseña"></div>
                        <div><input class= "btn-default" type="submit" value="Ingresar" name="submit"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
