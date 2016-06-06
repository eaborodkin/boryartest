<?php
namespace BorYar\Interfaces\Pages;

interface NewsPage extends BasePage
{
    /**
     * get news list
     * @return array
     */
    public function getNews();
}