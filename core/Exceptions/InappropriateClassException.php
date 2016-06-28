<?php
namespace BorYar\Exceptions;

use Exception;

class InappropriateClassException extends Exception
{
    protected $message = "Not a Controller";
}