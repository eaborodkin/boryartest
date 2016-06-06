<?php
namespace BorYar\Models;

use BorYar\Interfaces\Pages\Page as IPage;

class Page extends BasePage implements IPage
{

    protected $text;

    public function getType()
    {
        return "page";
    }

    public function getText()
    {
        return $this->text;
    }

}