<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#o">
      <img src="images/logo.jpeg" width="58" height="58">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="./index.php">
        Home
      </a>

      <a class="navbar-item" href="./about.php">
        About us
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="./events.php">
            Events
          </a>
          <a class="navbar-item" href="./gallery.php">
            Gallery
          </a>
        </div>
      </div>
    </div>
    <?php

$loggedIn = false;
    ?>
    

    <?php

if ($loggedIn == false) {
    ?>
    <form method="post">
    <div class="navbar-end" id="signlog">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" id="btn">
            <strong><input type="submit" name="button1"
                class="button" Value="Sign Up"/ id="btn"></strong>
          </a>
          <a class="button is-light" id="btn">
          <input type="submit" name="button2"
                class="button" Value="Log In"/ id="btn">
          </a>
        </div>
      </div>
    </div>
    </form>
    <?php
}else {
  echo "Please log in.";
}
?>


    
  </div>
</nav>