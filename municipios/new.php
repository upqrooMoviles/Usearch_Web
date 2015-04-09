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
        if (isset($_POST['submitted'])) {
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "INSERT INTO `municipios` ( `nombre`  ) VALUES(  '{$_POST['nombre']}'  ) ";
            mysql_query($sql) or die(mysql_error());
            echo "Added row.<br />";
            echo "<a href='list.php'>Back To Listing</a>";
        }
        ?>

        <form action='' method='POST'> 
            <p><b>Nombre:</b><br /><input type='text' name='nombre'/> 
            <p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
        </form> 
    </body>
</html>