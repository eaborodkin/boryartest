<?php
namespace BorYar\Models;

use BorYar\Interfaces\Pages\BasePage as IBasePage;

abstract class BasePage implements IBasePage
{

    protected $id;
    protected $name;

    abstract public function getType();

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

}