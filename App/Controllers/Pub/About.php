<?php

namespace App\Controllers\Pub;
use \Core\Base\View;

class About extends \Core\Base\Controller
{

  /**
   * Show the about page view
   */
  public function indexAction()
  {
    View::render("Pub/AboutPage.php");
  }
}
