<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

  // Logical Operators
  $x = 20;
  $y = 20;

  // Both are true so result is false
  echo '($x == $y xor 1 == 1) IS ';
  if ($x == $y xor 1 == 1) {
    echo "True<br>";
  } else {
    echo "False<br>";
  }

  // Only the condition on the right is true so result is true
  echo '($x == ($y/2) xor 1 == 1) IS ';
  if ($x == ($y/2) xor 1 == 1) {
    echo "True<br>";
  } else {
    echo "False<br>";
  }

?>

</body>
</html>