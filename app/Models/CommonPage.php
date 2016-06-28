<?php
namespace App\Models;

use BorYar\Interfaces\Pages\CommonPage as ICommonPage;

class CommonPage extends BasePage implements ICommonPage
{
    protected $text;

    protected function primaryKey()
    {
        return 'id';
    }

    protected function tableName()
    {
        return "pages";
    }

    public function getType()
    {
        return "page";
    }

    public function getText()
    {
        return $this->text;
    }

}