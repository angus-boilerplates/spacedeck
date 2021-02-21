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
  <!-- Top Section -->
  <section class="hero is-warning">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-1">
          Oops :/
        </h1>
      </div>
    </div>
  </section>
  <div id="wrapper" class="has-text-centered mt-5">
    <h3 class="title is-3">404 - Page not found</h3>
    <h2 class="subtitle is-6">The page you are looking for does not exist</h2>
    <a href="/" class="button is-rounded is-primary">Home</a>
  </div>
  <!-- Footer -->
  <? include_once $page->get_footer()?>
</body>
</html>