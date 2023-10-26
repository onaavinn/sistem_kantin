<?php

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'id_pemesanansekolah';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
