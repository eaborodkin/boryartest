<?php
namespace BorYar\Interfaces;

interface View
{

    /**
     * Set content for render
     * @param mixed $content - content to be rendered
     * @return mixed
     */
    public function setContent($content);

    /**
     * display result
     * @return mixed
     */
    public function render();
}