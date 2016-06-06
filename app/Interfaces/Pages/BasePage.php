<?php
namespace BorYar\Interfaces\Pages;

interface BasePage
{
    /**
     * @return string (page|news)
     */
    public function getType();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();
}