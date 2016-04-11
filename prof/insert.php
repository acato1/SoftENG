<?PHP
if(isset($_POST['className']) && isset($_POST['studentName']) && isset($_POST['pass']) && isset($_POST['devid'])) {
	
	$className = $_POST['className'];
	$studentName = $_POST['studentName'];
	$pass = $_POST['pass'];
	$devid = $_POST['devid'];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ProfessorSmith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "Insert Into $className(name, pw, devid) values('$studentName', '$pass', '$devid')";
if ($conn->query($sql) === TRUE) {
    echo "Student added to $className successfully";
} else {
    echo "Error adding student: " . $conn->error;
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
		Class Name <input type="text" name="className" placeholder="Class Name" /> <br/> <br/>
		Student Name <input type="text" name="studentName" placeholder="Student Name" /> <br/> <br/>
		Password <input type="text" name="pass" placeholder="Password" /> <br/> <br/>
		Device ID <input type="text" name="devid" placeholder="Device ID" /> <br/> <br/>
		<input type="submit" value="Insert" /> <br/> <br/>
	</form>
</body>
</html>