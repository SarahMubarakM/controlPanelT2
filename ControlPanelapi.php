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

<style>

button.Center {
  font-size: 25px;

background-color: #990000;
  color: white;

  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
button.Top {
  font-size: 27px;
  color: white;

background-color: #008CBA;
  margin: 0;
  
  position: absolute;
  top: 44%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
button.Below {
  font-size: 26px;
  color: white;

background-color: #008CBA;
  margin: 0;
  position: absolute;
  top: 56%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
button.Left {
  font-size: 26px;
  color: white;

background-color:#008CBA;

  margin: 0;
  position: absolute;
  top: 50%;
  left: 44.5%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
button.Right {
  font-size: 26px;
  color: white;

background-color:#008CBA;

  margin: 0;
  
  position: absolute;
  top: 50%;
  left: 56%;
  
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>
<body style="background-color:#e6ffff;">
<form action="controll.php" method="post">


<button  type="submit" name="L" class="Left">Left</button>
<button  type="submit" name="R"  class="Right">Right</button>
<button  type="submit"  name="B" class="Below">Backwards</button>
<button  type="submit" name="F"  class="Top">Forwards </button>
<button  type="submit"  name="C" class="Center">Stop</button>


</form>

</body>
</html>
<?php
// Insert Data
$result='';

if(isset($_POST["L"])){
$result = 'L';
$sql = "INSERT INTO cc (left_1, right_1, backward_1, forward_1, stop_1)
VALUES ('$result', '', '', '', '')";

if (mysqli_query($conn, $sql)) {
echo  "New record created successfully";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('location:controll.php');
}
else if(isset($_POST["R"])){
$result = 'R';
$sql = "INSERT INTO cc (left_1, right_1, backward_1, forward_1, stop_1)
VALUES ('', '$result', '', '', '')";

if (mysqli_query($conn, $sql)) {
echo  "New record created successfully";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('location:controll.php');
} 
else if(isset($_POST["B"])){
$result = 'B';
$sql = "INSERT INTO cc (left_1, right_1, backward_1, forward_1, stop_1)
VALUES ('', '', '$result', '', '')";

if (mysqli_query($conn, $sql)) {
echo  "New record created successfully";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('location:controll.php');
} 
else if(isset($_POST["F"])){
$result = 'F';
$sql = "INSERT INTO cc (left_1, right_1, backward_1, forward_1, stop_1)
VALUES ('', '', '', '$result', '')";

if (mysqli_query($conn, $sql)) {
echo  "New record created successfully";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('location:controll.php');
} 


?>
