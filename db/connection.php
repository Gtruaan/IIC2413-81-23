<?php
  try {
    $user = 'grupo81';
    $password = 'grupo81';
    $databaseName = 'grupo81e2';

    $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
  } catch (Exception $e) {
    echo "Error connecting to the database: $e";
  }
?>
