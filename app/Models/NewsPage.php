<?php
namespace BorYar\Models;

class NewsPage extends BasePage
{
    protected $articles;

    public function getNews()
    {
        return $this->articles;
    }

    public function __construct()
    {
        
    }

    public function getType()
    {
        return "news";
    }
}