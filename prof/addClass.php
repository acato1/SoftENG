<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProfessorSmith";


if(isset($_POST['tblName'])) {
$tblName = $_POST['tblName'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "CREATE TABLE $tblName (
sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50) NOT NULL,
pw VARCHAR(16) NOT NULL,
devid VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $tblName created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>


<html>
<head>
<title>Insert Data</title>
</head>

<body>
	<form action="<?PHP $_PHP_SELF ?>" method="post">
		Class Name <input type="text" name="tblName" placeholder="Class Name" /> <br/> <br/>
		<input type="submit" value="Make" /> <br/> <br/>
	</form>
</body>
</html>