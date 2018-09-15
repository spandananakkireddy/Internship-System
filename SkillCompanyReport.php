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
$password = "";
$dbname = "project_dbs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT i.InternshipId, i.Description, i.Stipend, count(r.SkillId) as SkillsRequired FROM Internship as i, Requires as r where i.InternshipId=r.InternshipId group by i.InternshipId";
$result = $conn->query($sql);
?>
<div class="container-fluid">
<table class="table-striped"> 
<tr>
	<th>Internship Id</th>
	<th>Description</th>
	<th>Stipend</th>
	<th>Skills Required</th>
</tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
	<td> <?php echo $row["InternshipId"] ?> </td>
	<td> <?php echo $row["Description"] ?> </td>
	<td> <?php echo $row["Stipend"] ?> </td>
	<td> <?php echo $row["SkillsRequired"] ?> </td>
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