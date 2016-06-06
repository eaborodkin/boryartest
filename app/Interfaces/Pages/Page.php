<?php
namespace BorYar\Interfaces\Pages;

interface Page extends BasePage
{
    /**
     * @return string
     */
    public function getText();
}