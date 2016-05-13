<?PHP
ini_set('mysql.connect_timeout',120);
$servername = "mysql12.000webhost.com";
$username = "a9270051_danielv";
$password = "Blackops1";
$dbname = "a9270051_testcal";


function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$lockPass = generateRandomString();
$unlockPass = generateRandomString();


if(isset($_POST['professorName'])) {
$tblName = $_POST['professorName'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "UPDATE math120 SET minimizeTime=0, lockpwd=$lockPass, unlockpwd=$unlockPass;";
if ($conn->query($sql) === TRUE) {
    setcookie("pid","value",time()+$int);
} else {
    echo "Error setting passwords: " . $conn->error;
}

$conn->close();


$page = $_SERVER['PHP_SELF'];
$sec = "3";
header("Refresh: $sec; url=roster.php");
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
      <img src="logo.gif" alt="Test-Secure Calculator">
    </a><!-- /header-primary__logo -->
    <nav id="nav-primary" class="header-primary__navigation nav-primary">
  <ul class="nav-primary__items">
          <li class="nav-primary__item ">
        <a href="login.php" class="nav-primary__link">Login</a>
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
		Name <input type="text" name="professorName" placeholder="Name" /> <br/> <br/>
		Password <input type="text" name="pass" placeholder="Password" /> <br/> <br/>
		<input type="submit" value="Connect" /> <br/> <br/>
	</form>
</body>
</html>