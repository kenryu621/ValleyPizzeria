<?php
  require('modules/header.php');

  if (isset($_GET['page'])) {
      $page = $_GET['page'];
      if (file_exists("content/$page.php")) {
          include("content/$page.php");
          include("modules/footer.php");
      } else {
          echo "<h1>404: Oops! Looks like you\'re lost!</h1>";
      }
  } else {
      include("content/home.php");
  }
