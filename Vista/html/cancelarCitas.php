<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sistema de Gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        <script type="text/javascript" src="Vista/jquery/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
    </head>
    <body>
        <?php
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Número</th><th>Fecha</th><th>Hora</th>
                </tr>
                <?php
                while ($fila = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td><?php echo $fila->CitNumero; ?></td>
                        <td><?php echo $fila->CitFecha; ?></td>
                        <td><?php echo $fila->CitHora; ?></td>
                        <td>
                            <td><a href="#" onclick="confirmarCancelar(<?php echo $fila->CitNumero;?>)">Cancelar</a></td>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            ?>
            <p>El paciente no tiene citas asignadas</p>
            <?php
        }
        ?>
    </body>
</html>