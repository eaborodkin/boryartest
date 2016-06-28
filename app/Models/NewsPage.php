<?php
namespace App\Models;

use BorYar\Interfaces\Pages\NewsPage as INewsPage;

class NewsPage extends BasePage implements INewsPage
{
    protected $articles;

    public function tableName()
    {
        return "news";
    }

    public function __construct()
    {
        $this->articles = $this->all();
    }

    public function getNews()
    {
        return $this->articles;
    }

    public function getType()
    {
        return "news";
    }
}