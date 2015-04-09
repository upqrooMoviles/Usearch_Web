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
        echo "<table border=1 >";
        echo "<tr>";
        echo "<td><b>Id</b></td>";
        echo "<td><b>Clave</b></td>";
        echo "<td><b>Centro Educativo</b></td>";
        echo "<td><b>Localidad</b></td>";
        echo "<td><b>Municipio</b></td>";
        echo "<td><b>Direccion</b></td>";
        echo "<td><b>Telefono</b></td>";
        echo "<td><b>Pagina Web</b></td>";
        echo "<td><b>Nivel Educativo</b></td>";
        echo "<td><b>Sector</b></td>";
        echo "<td><b>Duracion</b></td>";
        echo "<td><b>Periodo Escolares</b></td>";
        echo "<td><b>Costo Periodo</b></td>";
        echo "<td><b>Horarios</b></td>";
        echo "<td><b>Latitud</b></td>";
        echo "<td><b>Longitud</b></td>";
        echo "</tr>";
        $result = mysql_query("SELECT * FROM `escuela`") or trigger_error(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            foreach ($row AS $key => $value) {
                $row[$key] = stripslashes($value);
            }
            echo "<tr>";
            echo "<td valign='top'>" . nl2br($row['id']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['clave']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['centro_educativo']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['localidad']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['municipio']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['direccion']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['telefono']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['pagina_web']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['nivel_educativo']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['sector']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['duracion']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['periodo_escolares']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['costo_periodo']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['horarios']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['latitud']) . "</td>";
            echo "<td valign='top'>" . nl2br($row['longitud']) . "</td>";
            echo "<td valign='top'><a href=editar.php?id={$row['id']}>Edit</a></td><td><a href=eliminar.php?id={$row['id']}>Delete</a></td> ";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=ingresar.php>New Row</a>";
        ?>
    </body>
</html>