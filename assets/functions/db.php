<?php
/**
 * summary
 */
class Connection
{
    private $server = "mysql:host=localhost;dbname=ispgestion";
    private $username = "root";
    private $password = "1122";

    private $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
  ];

    protected $conn;

    public function open()
    {
        try {
            $this->conn = new PDO(
                $this->server,
                $this->username,
                $this->password,
                $this->options
            );
            return $this->conn;
        } catch (PDOException $e) {
            echo "Hubo un problema con la conexión" . $e->getMessage();
        }
    }
    public function close()
    {
        $this->conn = null;
    }
}
