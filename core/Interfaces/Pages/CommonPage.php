<?php
namespace BorYar\Interfaces\Pages;

interface CommonPage extends Page
{
    /**
     * @return string
     */
    public function getText();
}