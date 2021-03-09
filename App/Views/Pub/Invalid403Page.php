<?
/*
 * Page not found
 */
$page = new Core\Pages\PublicPage();
$page->add_title("Not Found");
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <!-- Head tags -->
  <? $page->get_head_tags();?>
  <? include_once $page->get_static_tags();?>
</head>
<body>
  <!-- Navbar -->
  <? include_once $page->get_navbar();?>
  <!-- Forbidden -->
  <section class="hero is-white is-fullheight">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <section class="hero is-danger">
        <div class="hero-body">
          <p class="title is-1 mx-auto"> Forbidden </p>
        </div>
      </section>
    </div>  

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <p class="title"> 403 - Access Denied </p>
        <p class="subtitle"> You do not have permission to access this page</p>
        <a href="/" class="button is-rounded is-primary">Home</a>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <? include_once $page->get_footer()?>
</body>
</html>