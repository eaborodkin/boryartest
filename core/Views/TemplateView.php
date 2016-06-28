<?php
namespace BorYar\Views;

use BorYar\Interfaces\TemplateView as IView;

class TemplateView implements IView
{
    private $content = null;

    public function __construct($filename = null, array $params = [])
    {
        if (!is_null($filename)) {
            $this->setTemplate($filename);
        }
        if (!empty($params)) {
            $this->bind($params);
        }
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        echo $this->content;
    }

    public function setTemplate($template)
    {
        $raw_content = file_get_contents($template);
        $this->setContent($raw_content);
    }

    public function bind(array $params)
    {
        foreach ($params as $key => $value) {
            $this->content = mb_eregi_replace("\{\{$key\}\}", $value, $this->content);
        }
    }
}