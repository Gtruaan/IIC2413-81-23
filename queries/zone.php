<?php include('../templates/header.html'); ?>

<h3>> Resultados de la consulta:</h3>

<?php
require("../db/connection.php");

$query_id = $_POST["zone"];

if ($query_id == "all"):
    $query = "SELECT id, num_telefono, calle FROM tiendas;";
else:
    $query = "SELECT id, num_telefono, calle FROM tiendas WHERE comuna = '$query_category';";
endif;

$result = $db -> prepare($query);

$result -> execute();
$results = $result -> fetchAll();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Numero de telefono</th>
        <th>Calle</th>
    </tr>
  
    <?php
        foreach ($results as $p) {
            echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td></tr>";
        }
    ?>
      
</table>
