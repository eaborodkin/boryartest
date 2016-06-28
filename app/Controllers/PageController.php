<?php
namespace App\Controllers;

use App\Models\CommonPage as Page;
use BorYar\Interfaces\Controller;
use BorYar\Views\TemplateView;

class PageController implements Controller
{
    public function __construct()
    {
        $this->page = new Page();
    }

    public function showPage($id)
    {
        $article = $this->page->find($id);
        $title = isset($article['name']) ? $article['name'] : "no";
        $view = new TemplateView(APP_ROOT . '/templates/page.php', [
            'title' => $title,
        ]);
        $view->render();
    }

}