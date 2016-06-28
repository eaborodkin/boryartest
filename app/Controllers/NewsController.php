<?php
namespace App\Controllers;

use App\Models\NewsPage;
use BorYar\Interfaces\Controller;
use BorYar\Views\TemplateView as View;

class NewsController implements Controller
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
        try {
            $article = $this->news_page->find($id);
            $title = isset($article['name']) ? $article['name'] : "no";
            $view = new View(APP_ROOT . '/templates/article.php', [
                'title' => $title,
            ]);
        } catch (NotFoundException $ex) {
            $view = new TemplateView(APP_ROOT . '/templates/404.php');
        }
        $view->render();
    }

}