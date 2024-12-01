          <ul class="quick-nav">
              <li>&copy; 2024 SwinTech Inc. |</li>
              <li><a href="index.php">Homepage</a></li>
              <li><a href="jobs.php">Jobs</a></li>
              <li><a href="apply.php">Apply</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="enhancements.php">Enhancements</a></li>
              <li><a href="phpenhancements.php">PHP Enhancements</a></li>
                  <?php
        session_start();
        if(isset($_SESSION['username'])) {
            //If the user is logged in, display the link 'Logout'        Nếu người dùng đã đăng nhập, hiển thị liên kết "Logout"
            if(basename($_SERVER['PHP_SELF']) == 'manage.php') {
                            echo 
                                '<li><a href="logout.php">Logout</a></li>';
            } else {
                        //On another page, display the link 'Manage'         Trang khác, hiển thị liên kết "Manage"
                            echo 
                                '<li><a href="manage.php">Manage</a></li>';
            }
            } else {
                    //If the user is not logged in and is on the login.php page, display the link 'Login'        Nếu người dùng chưa đăng nhập và đang ở trang login.php, hiển thị liên kết "Login"
                    if(basename($_SERVER['PHP_SELF']) == 'login.php') {
                            echo 
                                '<li><a href="login.php">Login</a></li>';
                } else {
                        //On other pages, display the link 'Manage'      Trang khác, hiển thị liên kết "Manage"
                            echo 
                                '<li><a href="manage.php">Manage</a></li>';
                }
            }
    ?>
          </ul>