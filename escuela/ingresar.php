<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Usearch</title>
        <link rel="stylesheet" href="../styles.css" type="text/css" />
    </head>
    <body>
        <div id="demo-container">
            <ul id="simple-menu">
                <li><a href="../index.html" class="current"><span>Inicio</span></a></li>
                <li><a href="../escuela/listar.php"><span>Escuelas</span></a></li>
                <li><a href="#"><span>Especialidades</span></a></li>
                <li><a href="#"><span>Test</span></a></li>
                <li><a href="#"><span>Preguntas</span></a></li>
                <li><a href="../municipios/list.php"><span>Municipios</span></a></li>
                <li><a href="#"><span>Usuarios</span></a></li>
            </ul>
        </div>
        &nbsp;&nbsp;
        <div>WebServices</div>
        <?php
        include('../config.php');
        if (isset($_POST['submitted'])) {
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "INSERT INTO `escuela` ( `clave` ,  `centro_educativo` ,  `localidad` ,  `municipio` ,  `direccion` ,  `telefono` ,  `pagina_web` ,  `nivel_educativo` ,  `sector` ,  `duracion` ,  `periodo_escolares` ,  `costo_periodo` ,  `horarios` ,  `latitud` ,  `longitud`  ) VALUES(  '{$_POST['clave']}' ,  '{$_POST['centro_educativo']}' ,  '{$_POST['localidad']}' ,  '{$_POST['municipio']}' ,  '{$_POST['direccion']}' ,  '{$_POST['telefono']}' ,  '{$_POST['pagina_web']}' ,  '{$_POST['nivel_educativo']}' ,  '{$_POST['sector']}' ,  '{$_POST['duracion']}' ,  '{$_POST['periodo_escolares']}' ,  '{$_POST['costo_periodo']}' ,  '{$_POST['horarios']}' ,  '{$_POST['latitud']}' ,  '{$_POST['longitud']}'  ) ";
            mysql_query($sql) or die(mysql_error());
            echo "Added row.<br />";
            echo "<a href='listar.php'>Back To Listing</a>";
        }
        ?>

        <form action='' method='POST'> 
            <p><b>Clave:</b><br /><input type='text' name='clave'/> 
            <p><b>Centro Educativo:</b><br /><input type='text' name='centro_educativo'/> 
            <p><b>Localidad:</b><br /><input type='text' name='localidad'/> 
            <p><b>Municipio:</b><br /><input type='text' name='municipio'/> 
            <p><b>Direccion:</b><br /><input type='text' name='direccion'/> 
            <p><b>Telefono:</b><br /><input type='text' name='telefono'/> 
            <p><b>Pagina Web:</b><br /><input type='text' name='pagina_web'/> 
            <p><b>Nivel Educativo:</b><br /><input type='text' name='nivel_educativo'/> 
            <p><b>Sector:</b><br /><input type='text' name='sector'/> 
            <p><b>Duracion:</b><br /><input type='text' name='duracion'/> 
            <p><b>Periodo Escolares:</b><br /><input type='text' name='periodo_escolares'/> 
            <p><b>Costo Periodo:</b><br /><input type='text' name='costo_periodo'/> 
            <p><b>Horarios:</b><br /><input type='text' name='horarios'/> 
            <p><b>Latitud:</b><br /><input type='text' name='latitud'/> 
            <p><b>Longitud:</b><br /><input type='text' name='longitud'/> 
            <p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
        </form>   
    </body>
</html>