<?php
namespace BorYar\Traits;

use PDO;
use PDOException;

trait Model
{
    /**
     * @var PDO connection
     */
    static $dbh = null;

    abstract protected function tableName();

    protected function connect()
    {
        $dsn = 'mysql:dbname=boryar_test;host=127.0.0.1';
        $user = 'root';
        $password = '';

        try {
            self::$dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function all($order_by = null, $limit = null, $offset = 0)
    {
        if (is_null(self::$dbh)) {
            $this->connect();
        }
        $table = $this->tableName();
        $sql = "SELECT * FROM $table";
        if (!is_null($order_by)) {
            $sql .= " ORDER BY $order_by";
        }
        if (!is_null($limit)) {
            $sql .= " LIMIT $limit OFFSET $offset";
        }

        $result = [];

        foreach (self::$dbh->query($sql) as $row) {
            $result = $row;
        }
        return $result;
    }

    public function filter(array $conditions, $limit = null, $offset = 0)
    {
        // TODO: Implement filter() method.
    }

}