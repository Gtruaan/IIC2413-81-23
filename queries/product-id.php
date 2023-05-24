<?php include('../templates/header.html'); ?>

<h3>> Resultados de la consulta:</h3>

<?php
require("../db/connection.php");

$query_id = $_POST["id"];

$query = "SELECT p.nombre,p.numero_cajas, SUM(c.peso) FROM productos p, cajas c WHERE c.id_producto = p.id AND p.id = '$query_id' GROUP BY p.id;";

$result = $db -> prepare($query);

$result -> execute();
$results = $result -> fetchAll();
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Numero de cajas</th>
        <th>Peso total</th>
    </tr>
  
    <?php
        foreach ($results as $p) {
            echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td></tr>";
        }
    ?>
      
  </table>
