<?php
namespace App\Models;

use BorYar\Interfaces\Pages\Page as IPage;
use BorYar\Interfaces\Model as IModel;
use BorYar\Traits\Model as ModelTrait;

abstract class BasePage implements IPage, IModel
{
    use ModelTrait;

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