<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skills Update Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include('index.php');
	$serverName = "localhost";
	$root = "root";
	$password = "";
	$db_name = "project_dbs";
	$conn = new mysqli($serverName, $root, $password, $db_name);
	if($conn->connect_error)
		die("Connection Failed: ".$conn->error);
	$skillId = $_POST['skillId'];
	$skillDescription = $_POST['skillDescription'];
	$qry = "update skills set skillDescription='$skillDescription' where skillId='$skillId'";
	if($conn->query($qry)) {	
		?><div class="alert alert-success">Updated succesfully</div>
	<?php } else {
		?><div class="alert alert-danger">Error in Updation<?php  echo $conn->error; ?></div>
	<?php }
	$conn->close();
?>

</body>
</html>