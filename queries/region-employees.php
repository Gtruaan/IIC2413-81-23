<?php include('../templates/header.html'); ?>

<h3>> Resultados de la consulta:</h3>

<?php
require("../db/connection.php");

$query_id = $_POST["region"];

if ($query_category == "all"):
    $query = "SELECT COUNT(w.id_personal) FROM tiendas t, ubicada_en u, trabaja_en w WHERE u.id_tienda = t.id AND w.id_tienda = t.id;";
else:
    $query = "SELECT COUNT(w.id_personal) FROM tiendas t, ubicada_en u, trabaja_en w WHERE u.region = '$query_category' AND u.id_tienda = t.id AND w.id_tienda = t.id;";
endif;

$result = $db -> prepare($query);

$result -> execute();
$results = $result -> fetchAll();
?>

<table>
    <tr>
        <th>Total de gente trabajando en la region:</th>
    </tr>
  
    <?php
        foreach ($results as $p) {
            echo "<tr><td>$p[0]</td></tr>";
        }
    ?>
      
</table>
