<?php
namespace BorYar\Controllers;

class BaseController
{
    public function phpinfo()
    {
        echo "Current PHP Settings";
        phpinfo();
    }
}