<?php
require_once "DatabaseMysql.php";
require_once "DatabaseSqlite.php";

$db = new DatabaseMysql("localhost", "tpi", "richard", "");
var_dump($db);

echo "<br>";

var_dump($db->establecerConexion());
var_dump($db->cerrarConexion());