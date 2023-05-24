<?php include('../templates/header.html'); ?>

<h3>> Resultados de la consulta:</h3>

<?php
require("../db/connection.php");

$query_id = $_POST["region"];

if ($query_id == "all"):
    $query = "SELECT t.id_tienda, p.genero, COUNT(*) AS cantidad_personas, AVG(p.edad) AS edad_promedio FROM personal p, ubicada_en u, trabaja_en t WHERE u.id_tienda = t.id_tienda AND p.id = t.id_personal GROUP BY t.id_tienda, p.genero;";
else:
    $query = "SELECT t.id_tienda, p.genero, COUNT(*) AS cantidad_personas, AVG(p.edad) AS edad_promedio FROM personal p, ubicada_en u, trabaja_en t WHERE u.region = '$query_id' AND u.id_tienda = t.id_tienda AND p.id = t.id_personal GROUP BY t.id_tienda, p.genero;";
endif;

$result = $db -> prepare($query);

$result -> execute();
$results = $result -> fetchAll();
?>

<table>
    <tr>
        <th>ID Tienda</th>
        <th>Genero</th>
        <th>Cantidad</th>
        <th>Edad promedio</th>
    </tr>
  
    <?php
        foreach ($results as $p) {
            echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>$p[3]</td></tr>";
        }
    ?>
      
</table>