<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="UTF-8">
    <meta name ="description" content="creating a website">
    <meta name="keywords" content="HTML, CSS, Website, Tech">
    <meta name="author" content="Nguyen Thanh Hung, Tran Thien Thao Vy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">
  <title>Home Page </title>
</head>
<body>
 <header>

<nav>
<?php
      include_once "header.inc";
	    include_once "menu.inc"; //include the footer
    ?>
</nav>

</header>
  <section class="hero-section"> 
    <section class="hero-text">
      <br><br><br>
        <h1 class="h1-homepage">SwinTech, simply try to be better!</h1>
        <p class="p1">SwinTech Inc. is at the forefront of technological innovation, dedicated to shaping the future of the digital landscape. Established with a passion for technology and a commitment to excellence, we have become a trusted partner for both job seekers and employers seeking top-tier talent. Our company thrives on the belief that a dynamic and diverse workforce is essential for driving innovation. We specialize in connecting skilled professionals with leading companies across various industries, creating synergies that propel businesses forward in the ever-evolving digital era.</p>
        <br>
        <a href="https://www.youtube.com/watch?v=JclBqBqM0Sk" class="p3-index">Learn more</a>
        <br><br>
        <p class="p2">At SwinTech Inc., we understand that the heart of innovation lies in the people behind it. Our mission is to empower individuals to build fulfilling careers while assisting companies in finding the right talent to achieve their goals. Join us in shaping the future of technology!</p><br><br>
        <a href="jobs.php" class="p3-index">Become one of us!</a>
        <br><br>
    </section>
  </section>

  <footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>

</body>
</html>
