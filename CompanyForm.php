<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'index.php'; ?>
<form action="CompanyList.php" method="post">
  <div class="form-group">
    <label for="skillId">Company Id:</label>
    <input type="text" name = "companyId" class="form-control" id="companyId">
  </div>
<div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" name = "name" class="form-control" id="name">
  </div>
<div cla	ss="form-group">
    <label for="email">Email:</label>
    <input type="text" name = "email" class="form-control" id="email">
  </div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name = "phone" class="form-control" id="phone">
  </div>
<div class="form-group">
    <label for="address">Address:</label>
    <input type="text" name = "address" class="form-control" id="address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>