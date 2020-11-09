<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>
<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "demos";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
printf("Connect failed: %sn", mysqli_connect_error());
exit();
}
?>
  
</body>
</html>

