<?php

/**
 * The master page class,
 * used to render tags and notifications
 * @author Angus Goody
 * 22/02/21
  */

//Namespace and Usage
namespace Core\Base;


abstract class Page{

  protected $page_title_addition = "Spacedeck"; //What to add to title Page1 | Spacedeck
  public $page_title = "Spacedeck"; //Default is non added
  public $page_desc = "Default description";
  public $page_keywords = "keywords,here";

  //Store notifications
  private $notifications = [];


  /**
   * Add notifications to this class
   * @param [list] $notlist - list of notifications to display
   */
  function add_notifications($notlist){
    $this->notifications=$notlist;
  }


 /*
  * If any notifications are passed
  * display them
  */
 function get_notifications(){
   foreach ($this->notifications as $key => $value){
     $key = !$key ? "NA": $key;
     $col="";
     switch ($key) {
       case "error":
         $col="is-danger";
         break;
       case "warning":
         $col="is-warning";
         break;
       case "success":
        $col="is-success";
        break;
       default:
         $col="is-link is-light";
     }
     echo "<div class='notification $col'>
     <button class='delete'></button>
     $value
     </div>";
   } 
 }

 /*
  * Get the canonical of the current
  * page
  */
 function get_canonical(){
   echo get_public_prefix().$this->get_url();
 }
 
 /*
  * Get the URL of the current requested page
  */
 function get_url(){
   return parse_url($_SERVER["REQUEST_URI"])["path"];
 }

 /**
  * Add a title to this page
  * @param String $title Title to display
  */
 function add_title($title){
   $this->page_title="$title | $this->page_title_addition";
 }
 


 abstract public function get_head_tags();

 abstract public function get_static_tags();

 abstract public function get_navbar();

 abstract public function get_footer();

}
