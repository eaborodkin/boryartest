<?php
namespace App\Models;

use BorYar\Interfaces\Pages\NewsPage as INewsPage;

class NewsPage extends BasePage implements INewsPage
{
    protected $articles = null;

    public function tableName()
    {
        return "news";
    }

    protected function primaryKey()
    {
        return 'id';
    }

    public function __construct()
    {

    }

    public function getNews()
    {
        return is_null($this->articles) ? $this->all() : $this->articles;
    }

    public function getType()
    {
        return "news";
    }
}