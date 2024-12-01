<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}
?>

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
     <title>Managing Page</title>
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
  
<!-- Form to enter queries               Form để nhập truy vấn -->
<br><br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="submit" name="list_all" value="List All EOIs" class="manage-list"><br><br>

  Enter Job Reference Number to list EOIs for a particular position:<br><br>
  Job Reference Number: <input type="text" name="position_ref">
  <input type="submit" name="list_by_position" value="List EOIs by Position"><br><br>

  Enter First Name and/or Last Name to list EOIs for a particular applicant: <br>
  First Name: <input type="text" name="first_name">
  Last Name: <input type="text" name="last_name">
  <input type="submit" name="list_by_applicant" value="List EOIs by Applicant"><br><br>

  Enter Job Reference Number to delete all EOIs with that reference number: <input type="text" name="del_position_ref">
  <input type="submit" name="delete_by_position" value="Delete EOIs by Position"><br><br>

  Enter EOI ID and new status to change the status of an EOI: <br>
  EOI ID: <input type="text" name="eoi_id">
  New Status: <input type="text" name="new_status">
  <input type="submit" name="change_status" value="Change Status"><br><br>
</form>
</section>
<?php
  include_once "settings.php";
  $conn = new mysqli($host, $user, $pwd, $sql_db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//  The function displays the results            Hàm hiển thị kết quả
function displayResults($result) {
  if ($result->num_rows > 0) {
      echo "<table>";
      echo "
              <tr>
              <th>EOI Number</th>
              <th>Job Reference Number</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Address</th>
              <th>Email Address</th>
              <th>Phone Number</th>
              <th>Skills</th>
              <th>Other Skills</th>
              <th>Status</th>
              </tr>";
      while($row = $result->fetch_assoc()) {
          echo "
                  <tr>
                  <td>".$row["eoi_id"]."</td>
                  <td>".$row["job_ref_num"]."</td>
                  <td>".$row["first_name"]."</td>
                  <td>".$row["last_name"]."</td>
                  <td>".$row["gender"]."</td>
                  <td>".$row["date_of_birth"]."</td>
                  <td>".$row["street_address"].", ".$row["suburb_town"].", ".$row["state"].", ".$row["postcode"]."</td>
                  <td>".$row["email_address"]."</td>
                  <td>".$row["phone_number"]."</td>
                  <td>".$row["skills"]."</td>
                  <td>".$row["other_skills"]."</td>
                  <td>".$row["status"]."</td>
                  </tr>";
      }
      echo "</table>";
  } else {
      echo "No results found.";
  }
}

//  Handle queries from forms            Xử lý các truy vấn từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["list_all"])) {
      //    Query to list all EOIs           Truy vấn để liệt kê tất cả các EOI
      $sql = "SELECT * FROM eoi_table";
      $result = $conn->query($sql);
      displayResults($result);
      
  } elseif (isset($_POST["list_by_position"])) {
      //    Query to list all EOIs for a specific location       Truy vấn để liệt kê tất cả các EOI cho một vị trí cụ thể
      $position_ref = $_POST["position_ref"];
      $sql = "SELECT * FROM eoi_table WHERE job_ref_num = '$position_ref'";
      $result = $conn->query($sql);
      displayResults($result);

  } elseif (isset($_POST["list_by_applicant"])) {
      //    Query to list all EOIs for a specific candidate          Truy vấn để liệt kê tất cả các EOI cho một ứng viên cụ thể
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $sql = "SELECT * FROM eoi_table WHERE first_name = '$first_name' OR last_name = '$last_name'";
      $result = $conn->query($sql);
      displayResults($result);

  } elseif (isset($_POST["delete_by_position"])) {
      //    Remove all EOIs with specific job reference numbers      Xóa tất cả các EOI với số tham chiếu công việc cụ thể
      $del_position_ref = $_POST["del_position_ref"];
      $sql = "DELETE FROM eoi_table WHERE job_ref_num = '$del_position_ref'";
      if ($conn->query($sql) === TRUE) {
          echo "All EOIs with job reference number $del_position_ref have been deleted successfully.";
      } else {
          echo "Error deleting EOIs: " . $conn->error;
      }
  } elseif (isset($_POST["change_status"])) {
      //    Change the status of an EOI              Thay đổi trạng thái của một EOI
      $eoi_id = $_POST["eoi_id"];
      $new_status = $_POST["new_status"];
      $sql = "UPDATE eoi_table SET status = '$new_status' WHERE eoi_id = '$eoi_id'";
      if ($conn->query($sql) === TRUE) {
          echo "Status of EOI with ID $eoi_id has been changed to $new_status successfully.";
      } else {
          echo "Error changing status: " . $conn->error;
      }
  }
}

$conn->close();
?>
<footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
</body>
</html>