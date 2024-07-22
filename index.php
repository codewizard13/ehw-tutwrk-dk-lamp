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
<body>

<?php
  $sql = "SELECT * FROM users WHERE user_first='Daniel';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    // KEEP SPITTING OUT DATA AS LONG AS WE HAVE ROWS
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['user_uid'] . "<br>";
    }
  }


?>

</body>
</html>