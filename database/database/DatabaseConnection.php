<?php

interface DatabaseConnection {
    public static function connect($host, $port, $dbname, $user, $pass);
    public static function selectAll($sql);
    public static function insert($sql, $data);
    public static function close();
}