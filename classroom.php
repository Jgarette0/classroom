
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/navbar-top.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/navbar-bottom.css">
<link rel="stylesheet" href="css/map.css">

</head>
<body>
  <?php include 'public/navbar-top.php'; ?>
  <?php include 'classroom/main.php'; ?>
  <?php include 'classroom/navbar-bottom.php'; ?>
  <?php include 'classroom/map.php'; ?>
</body>

<script src="data/classroom.js"></script>
<script src="js/main.js"></script>
<script src="js/navbar.js"></script>
<script src="js/user.js"></script>
<script type="module" src="js/classroom-modes.js"></script>
</html>