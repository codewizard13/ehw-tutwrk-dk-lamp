<?php
  include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<style>
input {
  display: block;
}
</style>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <input type="text" name="last" placeholder="Lastname">
  <input type="text" name="email" placeholder="E-mail">
  <input type="text" name="uid" placeholder="Username">
  <input type="text" name="pwd" placeholder="Password">
  <button type="submit" name="submit">Sign up</button>
</form>

<?php
  //Get full URL
  $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo "\$fullUrl = $fullUrl<br>";

?>


</body>
</html>