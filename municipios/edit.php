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
                <li><a href="../municipios/list.php"><span>Escuelas</span></a></li>
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
                $sql = "UPDATE `municipios` SET  `nombre` =  '{$_POST['nombre']}'   WHERE `id` = '$id' ";
                mysql_query($sql) or die(mysql_error());
                echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
                echo "<a href='list.php'>Back To Listing</a>";
            }
            $row = mysql_fetch_array(mysql_query("SELECT * FROM `municipios` WHERE `id` = '$id' "));
            ?>

            <form action='' method='POST'> 
                <p><b>Nombre:</b><br /><input type='text' name='nombre' value='<?= stripslashes($row['nombre']) ?>' /> 
                <p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
            </form> 
<?php } ?> 
    </body>
</html>