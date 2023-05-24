<?php include('../templates/header.html'); ?>

<h3>> Resultados de la consulta:</h3>

<?php
require("../db/connection.php");

$query_category = $_POST["category"];

if ($query_category == "all") {
    $query = "SELECT nombre, precio FROM productos ORDER BY precio DESC LIMIT 5;";
} else {
    $query = "SELECT nombre, precio FROM productos WHERE tipo = '$query_category' ORDER BY precio DESC LIMIT 5;";
}


$result = $db -> prepare($query);

$result -> execute();
$results = $result -> fetchAll();
?>

<table>
    <tr>
      <th>Nombre</th>
      <th>Precio</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($results as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
      
  </table>
