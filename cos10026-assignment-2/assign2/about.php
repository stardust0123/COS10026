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
  <title>About Page </title>
</head>
<body> 
<header>

<nav>
    <?php
	    include_once "header.inc"; //include the header
        include_once "menu.inc";   //include the menu
    ?>
</nav>
  
</header>

    <main>
        <section>
            <br><br>
            <h1 class="h1-about">Great to see you!</h1>                
            <p>We are a group of two students from Swinburne University of Technology. This website is our project 1 for course COS10026. If you see that this website needs any modification, we hope you can share with us!</p>
            <h2 class="h2-about">Group information</h2>
            <dl class="group-infor">
                <dt>Group Name</dt>
                <dd>Lagom - Swedish concept meaning "just the right amount" or "balanced moderation" in various aspects of life.</dd>
                <dt>Tutor's Name</dt>
                <dd>Mr. Eric Le</dd>
                <dt>Course</dt>
                <dd>COS10026: Computing Technology in the Inquiry Context</dd>
            </dl>      
            <h2 class="h2-about">The Crew</h2>
            <section class="members">
            <div class="member">
                <div class="box">
                    <img src="images/mem-1.png" alt="avatar">
                    <h3>Tran Thien Thao Vy</h3>
                    <br>
                    <h5>SWS01010</h5>
                    <h5>Coder and Designer</h5>
                    <a href="mailto:104991221@swin.edu.au" class="about-email">Email</a>
                </div>

                <div class="box">
                    <img src="images/mem-2.png" alt="avatar">
                    <h3>Nguyen Thanh Hung</h3>
                    <br>
                    <h5>SWD00023</h5>
                    <h5>Coder and Designer</h5>
                    <a href="mailto:104176332@student.swin.edu.au" class="about-email">Email</a>
                </div>
            </div>
            </section>
            <h2 class="h2-about">Our Timetable</h2>
            <table>
              <tr>
                  <th>Member/Day</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                  <th>Saturday</th>
                  <th>Sunday</th>
              </tr>
              <tr>
                  <td>Hung</td>
                  <td></td>
                  <td></td>
                  <td>VOV301</td>
                  <td>COS10005</td>
                  <td>COS10026</td>
                  <td>TNE1006</td>
                  <td></td>
              </tr>
              <tr>
                <td>Vy</td>
                <td></td>
                <td>VOV01</td>
                <td></td>
                <td></td>
                <td>COS10026</td>
                <td>TNE1006</td>
                <td></td>
            </tr>
          </table>
          <table class="table-2">
            <tr>
              <th>Day</th>
              <th>Hung</th>
              <th>Vy</th>
            </tr>
            <tr>
              <td>Monday</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td></td>
              <td>VOV01</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>VOV301</td>
              <td></td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>COS10005</td>
              <td></td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>COS10026</td>
              <td>COS10026</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>TNE1006</td>
              <td>TNE1006</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td></td>
              <td></td>
            </tr>
          </table>
          </section>
         </main>            
 <footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
</body>
</html>