<?php
namespace App\Controllers;

use App\Models\NewsPage;
use BorYar\Views\TemplateView as View;

class NewsController
{
    private $news_page;

    public function __construct()
    {
        $this->news_page = new NewsPage();
    }

    public function showList()
    {
//        $news = $this->news_page->getNews();
        $view = new View(APP_ROOT . '/templates/news.php', [
            'title' => "NEWS",
        ]);
        $view->render();
    }

}