<?php
namespace BorYar\Interfaces\Pages;

interface NewsPage extends Page
{
    /**
     * get news list
     * @return array
     */
    public function getNews();
}