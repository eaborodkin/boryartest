<?php
namespace BorYar\Exceptions;

use Exception;

class ClassNotFoundException extends Exception
{
    protected $message = "Class not found";
}