<?php require_once "DatabaseConnection.php";

class PostgresConnection implements DatabaseConnection {
    private static $connection;
    public static function connect($host, $port, $dbname, $user, $pass) : PDO {
        try {
            # Data Source Name
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
            # Realizamos la conexión
            self::$connection = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return self::$connection;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function selectAll($sql) {

        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($sql, $data) {
        $stmt = self::$connection->prepare($sql);

        $stmt->execute(
            array(
                ':username' => $data["user"],
                ':password' => $data["pass"]
            )
            );
    }
    public static function eliminar($sql){
        $stml = self::$connection->prepare($sql);
        $stml->execute();
    }

    public static function close() {
        self::$connection = null;
    }

    public static function show($sql){
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function modificar($sql){
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
    }
}