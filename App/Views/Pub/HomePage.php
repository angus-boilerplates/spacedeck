<?
/*
 * Homepage
 */
$page = new Core\Pages\PublicPage();
$page->add_title("Home");
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
  <!-- Content -->
  <div id="wrapper">
    <div class="container section">
      <div class="has-text-centered mb-5">
        <h1 class="title is-1">A modern PHP boilerplate</h1>
        <h3 class="subtitle">Spacedeck is a modern PHP boilerplate built using Bulma</h3>
      </div>
      <div class="columns is-centered is-mobile mt-5">
        <div class="column is-4-desktop is-7-tablet is-6-mobile is-centered">
          <img src="/assets/images/core/main.svg">
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once $page->get_footer()?>
</body>
</html>