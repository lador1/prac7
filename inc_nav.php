<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "ourcars") echo 'class="current"'; ?>><a href="ourcars.php"><span class="glyphicon glyphicon-star"></span> Our Cars</a></li>
    <li <?php if ($name == "hire") echo 'class="current"'; ?>><a href="hire.php"><span class="glyphicon glyphicon-shopping-cart"></span> Hire Now</a></li>
  </ul>
</nav>
