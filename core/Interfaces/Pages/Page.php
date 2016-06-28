<?php
namespace BorYar\Interfaces\Pages;

interface Page
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