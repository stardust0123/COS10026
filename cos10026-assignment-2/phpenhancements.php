<!DOCTYPE html>
<html lang="en">
<head>
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
  <title>PHP Enhancements Page </title>
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
    <br> 
    <main class="main-content">
        <br>
        <br>
        <h1 class="h1-enhancement">PHP Enhancements</h1>


        <section class="enhancement1">
            <h2>Enhancement 1: Login function</h2>               
            <section>
                <ul>
                    <li>Authentication of Users:<br>
                        - The login code verifies whether the user's login information (username and password) matches the information stored in the database. This ensures that only users with valid login information are allowed access to the system.
                     </li>
                     <li>Managing Failed Login Attempts:<br>
                        - The code keeps track of the number of unsuccessful login attempts by users. If this number exceeds a certain threshold ( 3 attempts), the code temporarily disables the account to prevent attacks.
                     </li>
                     <li>Temporary Account Lockout:<br>
                        - If the number of failed login attempts exceeds the threshold, the code temporarily disables the account by setting a waiting period before the user can try again. This reduces the likelihood of password-guessing attacks by limiting the number of password attempts within a short period.
                     </li>
                </ul>
            </section>
        </section>

        <section class="enhancement2">
            <h2>Enhancement 2: Logout function </h2>       
            <section>
                <ul>
                    <li>Clearing Session Data:<br>
                        - This code clears out all stored session variables using the session_unset() function. By doing so, it prevents any session-related information from persisting once the user logs out, thereby avoiding potential exposure of sensitive data.</li>
                    <li>Ending the Session:<br>
                        - With the session_destroy() function, this code ends the current session entirely, wiping out any stored session data. This step serves to enhance system security by ensuring that no session remnants are left behind after the user logs out.</li>
                    <li>Directing User Back:<br>
                        - After ending the session, the code redirects the user back to the login page via the header("Location: login.php") function. This redirection mechanism guarantees that users are returned to the login interface after logout, maintaining the integrity of the authentication process.</li>
                </ul>
            </section>
        </section>
        

    </main>

    <footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
</body>
</html>