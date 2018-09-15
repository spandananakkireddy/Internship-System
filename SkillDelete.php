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
<?php include 'index.php'; ?>
<form action="SkillDeleteMessage.php" method="post">
  <div class="form-group">
    <label for="skillId">Enter Skill Id to be deleted:</label>
    <input type="text" name = "skillId" class="form-control" id="skillId">
  </div>

  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</body>
</html>