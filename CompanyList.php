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

$companyId = $_POST['companyId'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO `company`(`CompanyId`, `Name`, `Email`, `Phone`, `Address`) VALUES ('$companyId', '$name', '$email', '$phone', '$address')";
$conn->query($sql);	

$sql = "SELECT * FROM Company";
$result = $conn->query($sql);
?>
<table class="table-bordered"> 
<th>Company Id</th>
<th>Name</th>
<th>E-mail</th>
<th>Phone</th>
<th>Address</th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
	<td> <?php echo $row["CompanyId"] ?> </td>
	<td> <?php echo $row["Name"] ?> </td>
	<td> <?php echo $row["Email"] ?> </td>
	<td> <?php echo $row["Phone"] ?> </td>
	<td> <?php echo $row["Address"] ?> </td>
</tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>