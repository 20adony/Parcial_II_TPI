<?php

interface DatabaseConnection {
    public function connect($host, $port,$dbname,$user,$pass);
    public function selectAll($sql);
}