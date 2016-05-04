<?PHP
$servername = "mysql12.000webhost.com";
$username = "a9270051_danielv";
$password = "Blackops1";
$dbname = "a9270051_testcal";
$row = ["John Romero", "Ash O'Connor", "Sindy Dangerfield", "Sam Thomas", "Cynthia Johnson", "Carmen McCreary", "Alejandro Jones", "Allan Smith", "Robert Vaughn", "Ellie Green", "Tony Montana"];
$time = [4, 0, 3, 6, 0, 5, 8, 1, 0, 0, 9];
$tbl = '<table style="border: 1px solid black">';


if(isset($_COOKIE["class"])) {
$tblName = $_COOKIE["class"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table

$sql = "SELECT name FROM testcal";
$result = $conn->query($sql);
if ($result) {
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	
	}
} else {
    echo "Error retrieving class: " . $conn->error;
}


$conn->close();

}

require('includes/html_table.class.php');

$table = new HTML_Table('', 'classTbl');
//$table->setAutoGrow(true);

for ($nr = 0; $nr < count($row); $nr) {
	$tbl .= '<tr style="border: 1px solid black">';
	$table->addRow();
	$col = 0;
	while ($col < 4) {
		if ($nr < count($row)) {
			if ($time[$nr] > 6) {
				$tbl .= '<th style="background-color:#FF1010" width="250">' . $row[$nr] . '</th>';
			} else if ($time[$nr] > 4) {
				$tbl .= '<th style="background-color:yellow" width="250">' . $row[$nr] . '</th>';
			} else {
				$tbl .= '<th style="background-color:#00FFFF" width="250">' . $row[$nr] . '</th>';
			}
			//$table->addCell($row[$nr], '', 'data', $color);
		} else {
			$tbl .= '<th style="border: 1px solid black">';
		}
		$nr++;
		$col++;
	}
	$tbl .= '</tr>';
}
$tbl .= '</table>';

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
    <h1 class="article-single__title">Math 22 Roster</h1>
	Students shown in Red have minimized their calculator quite a bit and should be monitored.
	<br>Yellow signifies a small amount of App switching.
	<br>Cyan shows students have remained logged in.
</body>
</html>

<?php 
echo $tbl;
?>