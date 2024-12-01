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
    <title>Login</title>
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

    <section>
    <h2>Login</h2>
    <?php
session_start();

if(isset($_SESSION['disabled_until']) && $_SESSION['disabled_until'] > time()) {
    $remaining_time = $_SESSION['disabled_until'] - time();
    $formatted_time = gmdate("i:s", $remaining_time);               //Format the remaining time into minutes:seconds
    echo "Access to the website is temporarily disabled. Please try again in $formatted_time.";
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

            // Verify whether the username and password have been provided
    if(empty($username) || empty($password)) {
        echo "Username and password must not be empty.";
    } else {
        include_once "authenticate.php"; 
    }
}
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</section>
<footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
</body>
</html>