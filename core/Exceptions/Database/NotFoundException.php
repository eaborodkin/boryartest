<?php
namespace BorYar\Exceptions\Database;

use PDOException;

class NotFoundException extends PDOException
{
    protected $message = "Not found";
}