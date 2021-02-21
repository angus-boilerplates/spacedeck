<?php

/**
 * The View class
 * @author Angus goody
 * 14/02/21
 * Initial work - https://davehollingworth.net/phpmvcg
 */

//Namespace and Usage
namespace Core\Base;


class View{

 /**
  * Render a view file
  *
  * @param string $view  The view file
  * @param array $args  Associative array of data to display in the view (optional)
  *
  * @return void
  */
 public static function render($view, $args = []){
     extract($args, EXTR_SKIP);

     $file = include_private_file("/App/Views/$view");  // relative to Root directory

     if (is_readable($file)) {
         require $file;
     } else {
         throw new \Exception("$file not found");
     }
 }

}

