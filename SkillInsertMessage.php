<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skills Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include 'index.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_dbs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$skillId = $_POST['skillId'];
$skillDescription = $_POST['skillDescription'];
$sql = "INSERT into Skills values('$skillId', '$skillDescription')";
if($conn->query($sql)) {	
	?><div class="alert alert-success">Data inserted succesfully</div>
<?php } else {
	?><div class="alert alert-danger">Error in insertion<?php  echo $conn->error; ?></div>
<?php }
$conn->close();
?>

</body>
</html>