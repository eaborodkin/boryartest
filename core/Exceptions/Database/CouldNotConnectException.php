<?php
namespace BorYar\Exceptions\Database;

use PDOException;

class CouldNotConnectException extends PDOException
{
    protected $message = "Connection failed";
}