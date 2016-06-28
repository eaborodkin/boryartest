<?php
namespace BorYar\Views;

use BorYar\Interfaces\View as IView;

class JsonView implements IView
{
    private $content = null;

    public function __construct($content)
    {
        $this->setContent($content);
    }

    public function setContent($content)
    {
        $this->content = json_encode($content);
    }

    public function render()
    {
        echo $this->content;
    }

}