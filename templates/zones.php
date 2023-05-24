    <option value="all">Todos</option>

    <?php
    require("db/connection.php");

    $query = "SELECT DISTINCT comuna FROM tiendas;";
    $result = $db -> prepare($query);
    $result -> execute();
    $zones = $result -> fetchAll();
    ?>
    <?php
    foreach ($zones as $zone) {
        echo "<option value='$zone[0]'>$zone[0]</option>";
    }
    ?>