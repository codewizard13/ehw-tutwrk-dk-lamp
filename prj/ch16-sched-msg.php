<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chapter 16 Ex: PHP Scheduled Message Programming</title>
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

  <?php

  $dayofweek = date("w");

  switch ($dayofweek) {
    case 1:
      $dow_name = "Monday";
      break;
    case 2:
      $dow_name = "Tuesday";
      break;
    case 3:
      $dow_name = "Wednesday";
      break;
    case 4:
      $dow_name = "Thursday";
      break;
    case 5:
      $dow_name = "Friday";
      break;
    case 6:
      $dow_name = "Saturday";
      break;
    case 0:
      $dow_name = "Sunday";
      break;
  }

  ?>
  <p>It is <?php echo $dow_name; ?></p>

</body>

</html>