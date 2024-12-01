<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta name ="description" content="creating a website">
    <meta name="keywords" content="HTML, CSS, Website, Tech">
    <meta name="author" content=" Tran Thien Thao Vy, Nguyen Thanh Hung">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">    
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

<form method="post" action="processEOI.php" novalidate="novalidate">
    <main class="apply-form">
        <section>
        <p class="thank-you">Thank you for considering our company for your career aspirations. We sincerely appreciate your interest and the time you've taken to apply. We're excited to learn more about you and how your skills and experiences align with our organization. Best of luck with your application!</p>
        <h1 class="h1-apply">Employment Application Form</h1>
        <br>
        <label for="job_ref_num" class="job">Job Reference Number</label>
            <input type="text" id="job_ref_num" name="job_ref_num" required="required" pattern="[A-Za-z0-9]{5}"><br><br>
        <label for="first_name" class="information">First name</label>
            <input type="text" id="first_name" name="first_name" required="required" pattern="[A-za-z]{1,20}"><br><br>
        <label for="last_name" class="information">Last name</label>
            <input type="text" id="last_name" name="last_name" required="required" pattern="[A-za-z]{1,20}"><br><br>
        <label for="date_of_birth" class="information">Date of birth</label>
            <input type="text" id="date_of_birth" name="date_of_birth" required="required" placeholder="dd/mm/yyyy" pattern="(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/[0-9]{4}"><br><br>
        
        <fieldset class="gender">
            <legend>Gender</legend><br>
            <p>
            <input type="radio" id="gender_a" name="gender" value="Male" required aria-required="true">
                <label for="gender_a">Male</label>
            <input type="radio" id="gender_b" name="gender" value="Female" required aria-required="true">
                <label for="gender_b">Female</label>
            <input type="radio" id="gender_c" name="gender" value="Non-binary" required aria-required="true">
                <label for="gender_c">Non-binary</label>
            <input type="radio" id="gender_d" name="gender" value="Transgender" required aria-required="true">
                <label for="gender_d">Transgender</label>
            <input type="radio" id="gender_e" name="gender" value="Intersex" required aria-required="true">
                <label for="gender_e">Intersex</label>
            <input type="radio" id="gender_f" name="gender" value="Others" required aria-required="true">
                <label for="gender_f">Others</label>
            <input type="radio" id="gender_g" name="gender" value="Prefer not to say" required aria-required="true">
                <label for="gender_g">Prefer not to say</label>
            </p>
        </fieldset><br>

        <label for="street_address" class="address">Street Address</label><br>
            <input type="text" id="street_address" name="street_address" required="required" pattern="/[^\w\s]/g][A-Za-z0-9]{1,40}"><br><br>
        <label for="suburb/town" class="address">Suburb/Town</label>
            <input type="text" id="suburb/town" name="suburb_town" required="required" pattern="/[^\w\s]/g][A-Za-z0-9]{1,40}"><br><br>
        <label for="state" class="address">State</label><br>
            <select name="state" id="state" class="select" required="required">
                <option value="">Please Select</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>
        <br><br>
        <label for="postcode" class="address">Postcode</label><br>
            <input type="text" id="postcode" name="postcode" required="required" pattern="[0-9]{4}"><br><br>
        <label for="email" class="information" name="email_address">Email</label><br>
            <input type="email" id="email" name="email_address" required="required" pattern=".+@.+\..+"><br><br>
        <label for="phone_num" class="information">Phone number</label><br>
            <input type="text" id="phone_num" name="phone_num" required="required" pattern="[0-9]{8,12}"><br><br>
        <fieldset class="skills">
        <legend>Skills</legend>
        <p>
        <input type="checkbox" id="skill1" name="skills" value="CA">
            <label for="skill1">Cloud Architecture</label>
        <input type="checkbox" id="skill2" name="skills" value="TS">
            <label for="skill2">Troubleshoot</label>
        <input type="checkbox" id="skill3" name="skills" value="DA">
            <label for="skill3">Data Analysis</label>
        <input type="checkbox" id="skill4" name="skills" value="SR">
            <label for="skill4">Switching and Routing</label>
        <input type="checkbox" id="skill5" name="skills" value="AIML">
            <label for="skill5">AI/ML</label>
        <input type="checkbox" id="skill6" name="skills" value="other">
            <label for="skill6">Other Skills</label>
        </fieldset>
        <br>
        <label for="skills" class="others">Other Skills</label>
            <textarea class="textarea" name="other_skills" id="skills" rows="8" cols="40" placeholder="Write description of your skills here..." ></textarea>
        <br><br>
        <input type="submit" value="Apply">
        <input type="reset" value="Reset">
    </section>
    </form>
    </main>

    <footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
    </body>
    </html>