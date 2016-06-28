<?php
namespace BorYar\Factories;

use BorYar\Interfaces\Controller;

class ControllerFactory
{
    public function getController($name)
    {
        if (!class_exists($name)) {
            throw new \Exception("Class not found");
        }
        $instance = new $name;
        if (!($instance instanceof Controller)) {
            throw new \Exception("Not a Controller");
        }
        return $instance;
    }
}