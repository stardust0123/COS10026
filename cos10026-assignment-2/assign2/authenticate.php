<?php
session_start();

include_once "settings.php";

//Check if the user has been temporarily disabled        Kiểm tra nếu người dùng đã bị vô hiệu hóa tạm thời
if(isset($_SESSION['disabled_until']) && $_SESSION['disabled_until'] > time()) {
    $remaining_time = $_SESSION['disabled_until'] - time();
    die("Access the temporarily disabled website. Please try again after $remaining_time seconds.");
}

$conn = new mysqli($host, $user, $pwd, $sql_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Query to check if the username and password are correct        Truy vấn để kiểm tra tên người dùng và mật khẩu có chính xác không
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //Authentication successful      Xác thực thành công
        $_SESSION["username"] = $username;
        //Reset the number of unsuccessful login attempts and the waiting time       Đặt lại số lần đăng nhập không thành công và thời gian chờ
        unset($_SESSION['login_attempts']);
        unset($_SESSION['disabled_until']);
        header("Location: manage.php");
        exit(); // "Stop script
    } else {
        // Authentication failed
        if(isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts']++;
            //Maximum number of login attempts is 3 times
            if ($_SESSION['login_attempts'] >= 3) {
            // Calculate the waiting time according to the arithmetic progression
            $lockout_duration = 30 * pow(($_SESSION['login_attempts'] - 1), 2); // Bắt đầu từ 30 giây, tăng theo cấp số cộng
            // Limit the maximum waiting time to 10 minutes
            $lockout_duration = min($lockout_duration, 10 * 60);
            $_SESSION['disabled_until'] = time() + $lockout_duration; // Calculate the disable time
            header("Location: login.php");
            exit(); // Stop script
        }
        } else {
            $_SESSION['login_attempts'] = 1;
            header("Location: login.php");
        }
        echo "Invalid username or password.";
    }
}

$conn->close();
?>