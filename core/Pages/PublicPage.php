<?php
/**
 * The class for public pages
 * contains functions to get tags
 * etc
 * @author Angus Goody
 * 15/02/21
 */

namespace Core\Pages;

class PublicPage{
  
  public $page_title = "Spacedeck";
  public $page_desc = "Default description";
  public $page_keywords = "Default, keywords, go, here";

  
  
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
  
  /*
   * Get the static meta tags for the top of the page
   */
  function get_static_tags(){
    return include_includeFile("/Pub/html_core/static-tags.php");
  }
  
  /*
   * Print out the head tags for this page
   * these can be updated on every page
   */
   
  function get_head_tags(){
    $title=$this->page_title;
    $desc = $this->page_desc;
    $keywods = $this->page_keywords;
    echo "
    <title>$title</title>
    <!--Meta information-->
    <meta name='description' content='$desc'>
    <meta name='keywords' content='$keywods'>
    ";
  }
  
  /*
   * Set the page title for a page, 
   * also add the bar
   */
   
  function add_title($title){
    $this->page_title="$title | Spacedeck";
  }
  
  /*
   * Get the public navbar to display at the top of the page.
   */
  function get_navbar(){
    return include_includeFile("/Pub/html_core/navbar.php");
  }
  
  /*
   * Get the public footer to display at the bottom of the page.
   */
  public function get_footer(){
    return include_includeFile("/Pub/html_core/footer.php");
  }  
  
}

?>
