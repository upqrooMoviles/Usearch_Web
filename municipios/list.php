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
        echo "<table border=1 >";
        echo "<tr>";
        echo "<td><b>Id</b></td>";
        echo "<td><b>Nombre</b></td>";
        echo "</tr>";
        $result = mysql_query("SELECT * FROM `municipios`") or trigger_error(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            foreach ($row AS $key => $value) {
                $row[$key] = stripslashes($value);
            }
            echo "<tr>";
            echo "<td valign='top'>" . nl2br($row['id']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['nombre']) . "</td>";
            echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a></td><td><a href=delete.php?id={$row['id']}>Delete</a></td> ";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=new.php>New Row</a>";
        ?>
    </body>
</html>