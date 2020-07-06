<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controlpanelapi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title> </head>  <body> 
	</body>
	</html>
<body style="background-color:#e6ffff;">
<?php

$result = "SELECT left_1, right_1, backward_1, forward_1, stop_1
FROM cc ORDER BY id DESC
LIMIT 1"; 
$query= mysqli_query($mysqli, $result) or die(mysqli_error());
while($row = mysqli_fetch_assoc($query)){
foreach($row as $row){
print "$row\t";	
}
}
mysqli_close($conn);

?>

	
	