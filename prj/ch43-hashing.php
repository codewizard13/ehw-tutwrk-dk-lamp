<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
  // echo "test123";
  // echo "<br>";
  // echo password_hash("test123", PASSWORD_DEFAULT);
  // The hashed password is what needs to be inside the database
  //  Allow for at least 256 chars to future proof

  $input = "test123";
  $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

  echo password_verify($input, $hashedPwdInDb);
// At this point, even YOU as the website owner won't be able to read the hashed password. But, you can use the return value of 1 to know everything worked

// #GOTCHA: When using procedural PHP programming you should always use `prepared statements` because it is safer

?>
  
</body>
</html>