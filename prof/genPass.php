<?PHP
function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$rndLock = generateRandomString();
$rndUnlock = generateRandomString();

echo "Lock string: " . $rndLock . "\n";
echo "Unlock string: " . $rndUnlock . "\n";

$page = $_SERVER['PHP_SELF'];
$sec = "3";
header("Refresh: $sec; url=$page");

?>

<html>
<head>
<title>Random password generator</title>
</head>

<body>
	
</body>
</html>