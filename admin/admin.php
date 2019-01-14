<?php
$db_dsn array(
 'host' => 'localhost',
'dbname' => 'dbmovies',
'charset'=> 'utf8'
);
$dsn = 'mysql'. http_build_query($db_dsn, '',';');

$db_user = 'root';
$db_pass = '';
try{
$pdo = new POO($dsn, $)
}
