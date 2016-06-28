<?php
namespace BorYar\Exceptions\Database;

use PDOException;

class QueryErrorException extends PDOException
{
    protected $message = "Error during query";
}