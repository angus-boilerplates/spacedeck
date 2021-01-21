<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import config file
include_once include_includeFile("/public/a_config.php");
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <!-- Head tags -->
  <? include_once include_includeFile("/public/head-tags.php");?>
</head>
<body>
  <!-- Navbar -->
  <? include_once include_includeFile("/public/navbar.php");?>
  <!-- Content -->
  <div id="wrapper">
    <section class="hero is-light">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Welcome to Spacedeck
          </h1>
          <h2 class="subtitle">
            A modern Bulma PHP boilerplate
          </h2>
        </div>
      </div>
    </section>
    <div class="container section">
      <div class="has-text-centered">
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
  <? include_once include_includeFile("/public/footer.php");?>
</body>
</html>