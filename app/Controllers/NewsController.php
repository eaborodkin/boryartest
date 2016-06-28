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
        $news = $this->news_page->getNews();
        $view = new View(APP_ROOT . '/templates/news.php', [
            'title' => print_r($news, true),
        ]);
        $view->render();
    }

    public function showArticle($id)
    {
        $article = $this->news_page->find($id);
        $title = isset($article['name']) ? $article['name'] : "no";
        $view = new View(APP_ROOT . '/templates/news.php', [
            'title' => $title,
        ]);
        $view->render();
    }

}