<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProfessorSmith";
$name = "studentName";

if(isset($_POST['tblName'])) {
$tblName = $_POST['tblName'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "SELECT $name FROM $tblName";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test-Secure Calculator</title>

  <link rel="stylesheet" href="css/style.min.css?v11.1.3">
  
</head>
<body>

<div class="content-secondary">
  <header class="header-primary">
    <a href="/" class="header-primary__logo">
      <img src="logo.svg" alt="Test-Secure Calculator">
    </a><!-- /header-primary__logo -->
    <nav id="nav-primary" class="header-primary__navigation nav-primary">
  <ul class="nav-primary__items">
          <li class="nav-primary__item ">
        <a href="login.php" class="nav-primary__link">Login</a>
      </li>
          <li class="nav-primary__item ">
        <a href="classList.php" class="nav-primary__link">Class List</a>
      </li>
          <li class="nav-primary__item ">
        <a href="roster.php" class="nav-primary__link">Class Overview</a>
      </li>
      </ul>
</nav><!-- /nav-primary -->
 </header><!-- /header-primary -->
</div><!-- /content-secondary -->
<hr class="separator">

<article class="article-single content--narrow">
  <header class="article-single__header">
    <h1 class="article-single__title">Professor Login</h1>
	<form action="<?PHP $_PHP_SELF ?>" method="post">
		Class Name <input type="text" name="className" placeholder="Class Name" /> <br/> <br/>
		Student Name <input type="text" name="studentName" placeholder="Student Name" /> <br/> <br/>
		Password <input type="text" name="pass" placeholder="Password" /> <br/> <br/>
		Device ID <input type="text" name="devid" placeholder="Device ID" /> <br/> <br/>
		<input type="submit" value="Connect" /> <br/> <br/>
	</form>
<p class="article-single__excerpt">In this tutorial, we'll create and implement slide and push menus that are initially hidden off screen, and transition into view with CSS transitions.</p>
  </header></p>
</body>
</html>