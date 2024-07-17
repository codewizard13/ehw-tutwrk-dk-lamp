<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

  // $x = 1;
  // $x = "number";
  // $x = 4;
  $x = 8;


  // switch ($x) {
  //   case 1:
  //     echo "The answer is 1";
  //   break; // says we're ending this case
  //   case "number":
  //     echo "The answer is number";
  //   break; 
  // }

  switch ($x) {
    case 1:
      echo "The answer is 1";
    break; // says we're ending this case
    case 2:
      echo "The answer is 2";
    break; // says we're ending this case
    case 3:
      echo "The answer is 3";
    break; // says we're ending this case
    case 4:
      echo "The answer is 4";
    break; // says we're ending this case
    default:
      echo "There is no answer"; // else equivalent - no break needed since last case
  }

?>

</body>
</html>