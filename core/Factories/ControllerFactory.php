<?php
namespace BorYar\Factories;

use BorYar\Exceptions\ClassNotFoundException;
use BorYar\Exceptions\InappropriateClassException;
use BorYar\Interfaces\Controller;

class ControllerFactory
{
    public function getController($name)
    {
        if (!class_exists($name)) {
            throw new ClassNotFoundException();
        }
        $instance = new $name;
        if (!($instance instanceof Controller)) {
            throw new InappropriateClassException;
        }
        return $instance;
    }
}