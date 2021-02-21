<?php

namespace App\Controllers\Pub;
use \Core\Base\View;


class Home extends \Core\Base\Controller
{

    /**
     * Show the homepage view
     */
    public function indexAction()
    {
      View::render("Pub/HomePage.php");
    }
}
