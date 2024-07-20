<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDEX.php</title>
</head>
<body>

<?php


function newCalc( $x ) {
  $newnr = $x * 0.75;
  echo "Here is 75% of what you wrote: " . $newnr . "<br>";
}

$x = 100;
newCalc($x);

$a = 10;
newCalc($a);

?>


</body>
</html>