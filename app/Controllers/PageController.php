<?php
namespace App\Controllers;

use App\Models\CommonPage as Page;
use BorYar\Exceptions\Database\NotFoundException;
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
        try {
            $article = $this->page->find($id);
            $view = new TemplateView(APP_ROOT . '/templates/page.php', [
                'title' => $article['name']
            ]);
        } catch (NotFoundException $ex) {
            $view = new TemplateView(APP_ROOT . '/templates/404.php');
        }
        $view->render();
    }

}