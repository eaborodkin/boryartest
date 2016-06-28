<?php
namespace BorYar\Interfaces;

interface TemplateView extends View
{
    /**
     * Set template string
     * @param string $template
     * @return mixed
     */
    public function setTemplate($template);

    /**
     * bind parameters to the template
     * @param array $params
     * @return mixed
     */
    public function bind(array $params);

}