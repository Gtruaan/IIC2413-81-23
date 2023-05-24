<?php include('templates/header.html'); ?>

<p>Bienvenido a Web-Muebles.<br>Puedes realizar las siguientes consultas:</p>

<!-- Consultas -->

<h3>> Consulta 1</h3>
<p>
Seleccione una categoria del producto. Web-Muebles le va a entregar los nombres <br>
de los cinco productos mas caros de esta categoria. <br>
</p>
<form class="search" action="queries/type-price.php" method="post">
    <select id="category" name="Categoria">
        <option value="all">Todos</option>
        <option value="iluminacion">Iluminacion</option>
        <option value="dormitorio">Dormitorio</option>
        <option value="living">Living</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 2</h3>
<p>
Ingrese una comuna. Web-Muebles le va a entregar todas las tiendas ubicadas <br>
en esta comuna, junto con su informacion. <br>
</p>
<form class="search" action="queries/zone.php" method="post">
    <input type="text" name="name" placeholder="Comuna">
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 3</h3>
<p>
    Ingrese el id de un producto. Web-Muebles le va a entregar el nombre del <br>
    producto, el numero de cajas necesarias para entregar este producto, <br>
    y el peso total de todas las cajas necesarias para guardar este producto. <br>
</p>
<form class="search" action="queries/product-id.php" method="post">
    <input type="text" name="id" placeholder="ID">
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 4</h3>
<p>
    Ingrese nombre de un producto y selecione una region. Web-Muebles le va a <br>
    entregar todas las tiendas de la region que tienen dicho producto en stock. <br>
    Adicionalmente, se mostrara el precio del producto. Si hay una oferta <br>
    para el producto en una tienda, se mostrara esta informacion. <br>
</p>
<form class="search" action="queries/product-region.php" method="post">
    <input type="text" name="name" placeholder="Nombre">
    <br>
    <select id="region" name="Region">
        <php include('templates/regions.php'); ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 5</h3>
<p>
    Seleccione una region. Web-Muebles mostrara el numero total de personas <br>
    trabajando en las tiendas de esta region. <br>
</p>
<form class="search" action="queries/region-employees.php" method="post">
    <select id="region" name="Region">
        <php include('templates/regions.php'); ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 6</h3>
<p>
    Seleccione una region. Para cada tienda de esta region Web-Muebles mostrara <br>
    el numero de personas de cada genero trabajando en esta tienda, y su edad <br>
    promedio (para cada genero). <br>
</p>
<form class="search" action="queries/region-workers.php" method="post">
    <select id="region" name="Region">
        <php include('templates/regions.php'); ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

<h3>> Consulta 7</h3>
<p>
    Seleccione una region. Web-Muebles mostrara, para cada tienda de esta <br>
    region, su direccion, y el valor total del stock disponible en esta tienda. <br>
</p>
<form class="search" action="queries/region-workers.php" method="post">
    <select id="region" name="Region">
        <php include('templates/regions.php'); ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Buscar">
</form>

