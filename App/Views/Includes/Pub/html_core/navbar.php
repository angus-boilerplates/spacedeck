<?php
/*
 * This is the Navbar file, this will be your navbar
 * for the whole site, updating this file will change
 * the navbar for all pages
 */


//Will show the current page in a different colour
function isCurrent($name){
  if(basename(parse_url($_SERVER["REQUEST_URI"])["path"]) == $name){
    echo "activeNavLink";
  }
}
?>
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="container">
    <!--Logo-->
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="/assets/images/core/logo-light.svg" width="112" height="28">
      </a>

      <!--Burger-->
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarSpace">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <!--Links-->
    <div id="navbarSpace" class="navbar-menu">
      <div class="navbar-start">
        <!--Home-->
        <a class="navbar-item <?isCurrent("")?>" href="/">
          Home
        </a>
        <!--Pages-->
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Pages
          </a>
          <div class="navbar-dropdown">
            <a class="navbar-item">
              Example link 1
            </a>
            <a class="navbar-item">
              Example link 2
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Example link 3
            </a>
          </div>
        </div>
        <!--ABout page-->
        <a class="navbar-item <?isCurrent("about")?>" href="/about">
          About
        </a>

      </div>


      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-secondary" target="_blank" href="https://github.com/angusgoody/spacedeck">
              <span class="icon"><i class="fab fa-github"></i></span>
              <span>GitHub</span>
            </a>
            <a class="button is-light" href="#">
              <span>Login</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

