<?php require("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Supercar Hire Townsville - Home</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>
<h2>Rent Your Dream Supercar</h2>
<div id="content">
  <p>Indulge in the ultimate driving experience with our luxury supercar rentals...

  <p> Click on a car to hire! <p>
  </p>
</div>
<p>&nbsp;</p>
<section id="features" class="clearfix">
    <div id="first">
    <h2>Lamborghini Aventador</h2>
        <a href="hire.php?car=Lamborghini%20Aventador"><img class="img-circle" src="images/Lamborghini Aventador.jpg" height="300" width="500" alt="Lamborghini Aventador"></a>
    <blockquote>Unleash the power of Italian engineering...</blockquote>
    </div>
    <div id="second">
    <h2>Ferrari 488 Spider</h2>
        <a href="hire.php?car=Ferrari%20488%20Spider"><img class="img-circle" src="images/Ferrari 488 Spider.jpg" height="300" width="500" alt="Ferrari 488 Spider"></a>
        <blockquote>Experience the thrill of speed and elegance...</blockquote>
    </div>
    <div id="third">
    <h2>Porsche 911 Turbo S</h2>
        <a href="hire.php?car=Porsche%20911%20Turbo%20S"><img class="img-circle" src="images/Porsche 911 Turbo S.jpg" height="300" alt="Porsche 911 Turbo S"></a>
        <blockquote>German precision meets performance...</blockquote>
    </div>
</section>
<?php include("inc_footer.php"); ?>
</body>
</html>
