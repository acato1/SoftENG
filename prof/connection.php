<?PHP
$server_name = "localhost";
$user_name = "root";
$password = "";

// select database for use
$database_name = 'norton2';

$con = mysqli_connect($server_name, $user_name, $password, $database_name)
or die ('Server Error: ' . mysql_error());

//mysql_select_db($database_name) or die ('DB Error: Unable to select db');

//mysqli_query("SET NAMES 'utf8'");

?>