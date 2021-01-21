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
  <? include_once include_includeFile("/public/footer.php");?>
</body>
</html>