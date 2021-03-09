<?
/*
 * Homepage
 */
$page = new Core\Pages\PublicPage();
$page->add_title("About");
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
      <!--Title and subtitle-->
      <div class="has-text-centered mb-5 mt-3">
        <h1 class="title is-size-1-tablet is-size-3">About</h1>
        <h3 class="subtitle is-size-5-tablet is-size-6">Spacdeck about page</h3>
        <hr>
      </div>

      <!--Button colours-->
      <div class="">
        <h3 class="title is-4">Button colours</h3>
        <div class="buttons">
          <button class="button is-primary">Primary</button>
            <button class="button is-link">Link</button>
          <button class="button is-info">Info</button>
          <button class="button is-success">Success</button>
          <button class="button is-warning">Warning</button>
          <button class="button is-danger">Danger</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <? include_once $page->get_footer()?>
</body>
</html>