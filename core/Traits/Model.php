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

    abstract protected function primaryKey();

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
        $found = $this->filter([sprintf("%s = '%d'", $this->primaryKey(), (int)$id)]);
        $result = [];
        if (count($found) > 0) {
            $result = $found[0];
        }
        return $result;
    }

    public function all($order_by = null, $limit = null, $offset = 0)
    {
        return $this->filter([], $order_by, $limit, $offset);
    }

    public function filter(array $conditions, $order_by = null, $limit = null, $offset = 0)
    {
        if (is_null(self::$dbh)) {
            $this->connect();
        }
        $table = $this->tableName();
        $sql = "SELECT * FROM $table";

        $where = "";
        foreach ($conditions as $cond) {
            $where .= (!$where ? " WHERE " : " AND ") . " $cond";
        }
        $sql .= $where;
        if (!is_null($order_by)) {
            $sql .= " ORDER BY $order_by";
        }
        if (!is_null($limit)) {
            $sql .= " LIMIT $limit OFFSET $offset";
        }

        $result = [];

        foreach (self::$dbh->query($sql) as $row) {
            $result[] = $row;
        }
        return $result;
    }

}