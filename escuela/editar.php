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
                <li><a href="#"><span>Municipios</span></a></li>
                <li><a href="#"><span>Usuarios</span></a></li>
            </ul>
        </div>
        &nbsp;&nbsp;
        <div>WebServices</div>
        <?php
        include('../config.php');
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            if (isset($_POST['submitted'])) {
                foreach ($_POST AS $key => $value) {
                    $_POST[$key] = mysql_real_escape_string($value);
                }
                $sql = "UPDATE `escuela` SET  `clave` =  '{$_POST['clave']}' ,  `centro_educativo` =  '{$_POST['centro_educativo']}' ,  `localidad` =  '{$_POST['localidad']}' ,  `municipio` =  '{$_POST['municipio']}' ,  `direccion` =  '{$_POST['direccion']}' ,  `telefono` =  '{$_POST['telefono']}' ,  `pagina_web` =  '{$_POST['pagina_web']}' ,  `nivel_educativo` =  '{$_POST['nivel_educativo']}' ,  `sector` =  '{$_POST['sector']}' ,  `duracion` =  '{$_POST['duracion']}' ,  `periodo_escolares` =  '{$_POST['periodo_escolares']}' ,  `costo_periodo` =  '{$_POST['costo_periodo']}' ,  `horarios` =  '{$_POST['horarios']}' ,  `latitud` =  '{$_POST['latitud']}' ,  `longitud` =  '{$_POST['longitud']}'   WHERE `id` = '$id' ";
                mysql_query($sql) or die(mysql_error());
                echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
                echo "<a href='listar.php'>Back To Listing</a>";
            }
            $row = mysql_fetch_array(mysql_query("SELECT * FROM `escuela` WHERE `id` = '$id' "));
            ?>

            <form action='' method='POST'> 
                <p><b>Clave:</b><br /><input type='text' name='clave' value='<?= stripslashes($row['clave']) ?>' /> 
                <p><b>Centro Educativo:</b><br /><input type='text' name='centro_educativo' value='<?= stripslashes($row['centro_educativo']) ?>' /> 
                <p><b>Localidad:</b><br /><input type='text' name='localidad' value='<?= stripslashes($row['localidad']) ?>' /> 
                <p><b>Municipio:</b><br /><input type='text' name='municipio' value='<?= stripslashes($row['municipio']) ?>' /> 
                <p><b>Direccion:</b><br /><input type='text' name='direccion' value='<?= stripslashes($row['direccion']) ?>' /> 
                <p><b>Telefono:</b><br /><input type='text' name='telefono' value='<?= stripslashes($row['telefono']) ?>' /> 
                <p><b>Pagina Web:</b><br /><input type='text' name='pagina_web' value='<?= stripslashes($row['pagina_web']) ?>' /> 
                <p><b>Nivel Educativo:</b><br /><input type='text' name='nivel_educativo' value='<?= stripslashes($row['nivel_educativo']) ?>' /> 
                <p><b>Sector:</b><br /><input type='text' name='sector' value='<?= stripslashes($row['sector']) ?>' /> 
                <p><b>Duracion:</b><br /><input type='text' name='duracion' value='<?= stripslashes($row['duracion']) ?>' /> 
                <p><b>Periodo Escolares:</b><br /><input type='text' name='periodo_escolares' value='<?= stripslashes($row['periodo_escolares']) ?>' /> 
                <p><b>Costo Periodo:</b><br /><input type='text' name='costo_periodo' value='<?= stripslashes($row['costo_periodo']) ?>' /> 
                <p><b>Horarios:</b><br /><input type='text' name='horarios' value='<?= stripslashes($row['horarios']) ?>' /> 
                <p><b>Latitud:</b><br /><input type='text' name='latitud' value='<?= stripslashes($row['latitud']) ?>' /> 
                <p><b>Longitud:</b><br /><input type='text' name='longitud' value='<?= stripslashes($row['longitud']) ?>' /> 
                <p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
            </form> 
<?php } ?> 
    </body>
</html>