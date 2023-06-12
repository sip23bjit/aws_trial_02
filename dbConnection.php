<?php
$databaseHost = 'polak-db.crkfp60kehfn.ap-northeast-2.rds.amazonaws.com';
$databaseName = 'test';
$databaseUsername = 'example';
$databasePassword = 'password';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
