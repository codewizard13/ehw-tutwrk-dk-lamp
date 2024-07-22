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
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>


</body>
</html>