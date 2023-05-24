    <option value="all">Todos</option>

    <?php
    require("../config/conexion.php");

    $query = "SELECT DISTINCT region FROM ubicada_en;";
    $result = $db -> prepare($query);
    $result -> execute();
    $regions = $result -> fetchAll();
    ?>
    <?php
    foreach ($regions as $region) {
        echo "<option value="$region[0]">$region[0]</option>";
    }
    ?>