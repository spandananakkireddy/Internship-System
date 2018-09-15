<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skills List</title>
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
$password = "snakkire";
$dbname = "project_dbs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT skillid, skilldescription FROM Skills";
$result = $conn->query($sql);
?>
<div class="container-fluid">
<table class="table-striped"> 
<tr>
	<th>Skill Id</td>
	<th>Skill Descripton</td>
</tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
	<td> <?php echo $row["skillid"] ?> </td>
	<td> <?php echo $row["skilldescription"] ?> </td>
</tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</div>
</body>
</html>