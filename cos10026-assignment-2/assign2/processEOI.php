<?php
session_start();
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
<body>
	<br><br><br>
	<h1 class="h1-process">Application Confirmation:</h1>
	<br><br><br>
	<?php
    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function date_validation($date){
        $date_format = "d/m/Y";
    
        //check whether input date is in correct format
        $date_obj = DateTime::createFromFormat($date_format, $date);
        if ($date_obj === false) {
            // Invalid date format
            return false;
        }
    
        // Check if the date is valid
        $day = $date_obj->format('d');
        $month = $date_obj->format('m');
        $year = $date_obj->format('Y');
        if (!checkdate($month, $day, $year) || $date_obj->format($date_format) !== $date) {
            // Invalid date
            return false;
        }
    
        return true;
    }
    
    function age_validation($date)
    {
        $date_format = "d/m/Y";
        $min_age = 15;
        $max_age = 80;
    
        $date_obj = DateTime::createFromFormat($date_format, $date);
    
        if ($date_obj === false) {
            // Invalid date format
            return false;
        }
    
        // Calculate the age
        $today = new DateTime();
    
        if ($date_obj < $today) {
            $diff = $today->diff($date_obj);
            // Retrieve the number of years
            $age = $diff->y;
    
            return $age >= $min_age && $age <= $max_age;
        }
    
        return false;
    }
    
	function validate_postcode($postcode, $state)
	{
		$postcode_validation = [
			"VIC" => "/^3/",
			"NSW" => "/^1|2/",
			"QLD" => "/^4|9/",
			"NT" => "/^08/",
			"WA" => "/^6/",
			"SA" => "/^5/",
			"TAS" => "/^7/",
			"ACT" => "/^0/"
		];
	
		if (array_key_exists($state, $postcode_validation)) {
			$regex = $postcode_validation[$state];
			return preg_match($regex, $postcode) === 1;
		}
	
		return false;
	}
    
    function display_missing_error($field)
    {
        return sprintf("<p><strong>Missing field: %s </strong></p>", $field);
    }
    
    function display_invalid_error($field, $message)
    {
        return sprintf("<p><strong>Invalid field: %s </strong> %s</p>", $field, $message);
    }
	function format_invalid_error($field, $message)
    {
        return sprintf("<p><strong>Invalid field: %s </strong> %s</p>", $field, $message);
    }

	try {
		$job_ref_num = sanitise_input($_POST["job_ref_num"]);
		$first_name = sanitise_input($_POST["first_name"]);
		$last_name = sanitise_input($_POST["last_name"]);
		$email_address = sanitise_input($_POST["email_address"]);
		$phone_num = sanitise_input($_POST["phone_num"]);
		$date_of_birth = sanitise_input($_POST["date_of_birth"]);
		$gender = $_POST["gender"];
		$street_address = sanitise_input($_POST["street_address"]);
		$suburb_town = sanitise_input($_POST["suburb_town"]);
		$state = $_POST["state"];
		$postcode = sanitise_input($_POST["postcode"]);
		$skills = isset($_POST["skills"]) ? $_POST["skills"] : array();
		$other_skill = isset($_POST["other_skills"]) ? sanitise_input($_POST["other_skills"]) : NULL;

		//Validate
		if (empty($job_ref_num)) {
			throw new Exception("Job Reference Number is missing");
		}
		
		if (!preg_match("/^[A-Za-z0-9]{5}$/", $job_ref_num)) {
			throw new Exception(format_invalid_error("Job Reference Number", "Invalid Job Reference Number"));
		}
		
		if (!preg_match("/^[A-Za-z]{1,20}$/", $first_name) || !preg_match("/^[A-Za-z]{1,20}$/", $last_name)) {
			throw new Exception(format_invalid_error("First Name and Last Name", "Your First Name and Last Name should only have <strong>letters</strong> and should not exceed <strong>20</strong> characters in length.")
			);
		}
		
		if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
			throw new Exception(display_invalid_error("Email", "Invalid email address"));
		}
		
		if (!preg_match("/^[0-9\s]{8,12}$/", $phone_num)) {
			throw new Exception(display_invalid_error("Phone Number", "Invalid phone number"));
		}
		
		if (!date_validation($date_of_birth)) {
			throw new Exception(display_invalid_error("Date of Birth", "Wrong date format (dd/mm/yyyy) " . $date_of_birth));
		}
		
		if (!preg_match("/^.{1,40}$/", $street_address)) {
			throw new Exception(display_invalid_error("Street Address", "Only <strong>40</strong> words is acceptable in the street address."));
		}
		
		if (!preg_match("/^.{1,40}$/", $suburb_town)) {
			throw new Exception(display_invalid_error("Suburb/Town", "The suburb name you entered should not exceed <strong>40</strong> characters in length." . $suburb_town));
		}
		
		if (!age_validation($date_of_birth)) {
			throw new Exception(display_invalid_error("Date of Birth", "You have to be in the age group of 15 to 80 to apply the job"));
		}
		
		if (!preg_match("/^[0-9]{4}$/", $postcode)) {
			throw new Exception(display_invalid_error("Postcode", "Only <strong>4</strong> digits is acceptable in Postcode."));
		} 
		
		if (empty($skills) && empty($other_skills)) {
			throw new Exception(display_missing_error("Skills"));
		}
		
		if (isset($_POST["skills"])) {
			$skills = $_POST["skills"];
			if (!is_array($skills)) {
				$skills = array($skills);
			}
		
			if (in_array("other_skills", $skills) && (empty($other_skills) || trim($other_skills) === "")) {
				throw new Exception(display_invalid_error("Skills", "Please provide the other skills you possessed"));
			}
		}
		$skillsString = implode(', ', $skills);
		$sql = "UPDATE eoi_table SET skills = '$skillsString'";
		//Database
		require_once("settings.php");

		$conn = @mysqli_connect(
			$host,
			$user,
			$pwd,
			$sql_db
		);

		if (!$conn) {
			die("Can not connect to the database: " . mysqli_connect_error());
		}	

		$eoi_table = "eoi_table";
		$mysqli_job_ref_num =  mysqli_real_escape_string($conn, $job_ref_num);
		$mysqli_first_name = mysqli_real_escape_string($conn, $first_name);
		$mysqli_last_name = mysqli_real_escape_string($conn, $last_name);
		$mysqli_date_of_birth = mysqli_real_escape_string($conn, $date_of_birth);
		$mysqli_street_address = mysqli_real_escape_string($conn, $street_address);
		$mysqli_gender = mysqli_real_escape_string($conn, $gender);
		$mysqli_suburb_town = mysqli_real_escape_string($conn, $suburb_town);
		$mysqli_state = mysqli_real_escape_string($conn, $state);
		$mysqli_postcode = intval($postcode);
		$mysqli_email_address = mysqli_real_escape_string($conn, $email_address);
		$mysqli_phone_num = mysqli_real_escape_string($conn, $phone_num);
		$mysqli_gender = mysqli_real_escape_string($conn, $gender);
		$mysqli_skills= mysqli_real_escape_string($conn, $skillsString);
		$other_skills = isset($_POST["other_skills"]) ? trim(sanitise_input($_POST["other_skills"])) : NULL;

	
			$query = mysqli_query($conn, "Insert into eoi_table (
				job_ref_num,
				first_name,
				last_name,    
				date_of_birth,        
				gender,
				street_address,
				suburb_town,
				state,     
				postcode,
				email_address,
				phone_num,
				skills,
				other_skills
			) VALUES (
				'$job_ref_num',
				'$first_name',
				'$last_name',
				'$date_of_birth',
				'$gender',
				'$street_address',
				'$suburb_town',
				'$state',
				'$postcode',
				'$email_address',
				'$phone_num',
				'$skillsString',
				'$other_skills'
			)");
			if ($query) {
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Application has been successfully submitted!"; 
			} 	
			unset($_SESSION["form_data"]);
		} catch (Exception $e) {
			echo "<p>Error: " . $e->getMessage() . "</p>";
		}

	?>
	<br><br><br>
	<footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
	</body>
	</html>