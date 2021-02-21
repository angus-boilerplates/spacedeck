<?php

namespace App\Controllers\Pub;
use \Core\Base\View;

/**
 * Error controller
 *
 * PHP version 7.0
 */
class Error extends \Core\Base\Controller
{
  /**
   * Will display the not found message
   */
  public function notfoundAction()
  {
    View::render("Pub/Invalid404Page.php");
  }

  /**
   * Will render the 403 page
   */
  public function notallowedAction(){
    View::render("Pub/Invalid403Page.php");
  }
}
