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
<link rel="stylesheet" href="css/dk-style.css">
<style>

</style>

<body>

  <form action="includes/signup.inc.php" method="POST">
    <?php
    //Firstname
    if (isset($_GET['first'])) {
      $first = $_GET['first'];
      echo '<input type="text" name="first" placeholder="Firstname"value="'.$first.'">';
    }
    else {
      echo '<input type="text" name="first" placeholder="Firstname">';
    }
    //Lastname
    if (isset($_GET['last'])) {
      $last = $_GET['last'];
      echo '<input type="text" name="last" placeholder="Lastname"value="'.$last.'">';
    }
    else {
      echo '<input type="text" name="last" placeholder="Lastname">';
    }
    ?>
    <input type="text" name="email" placeholder="E-mail">
    <?php
    //Username
    if (isset($_GET['uid'])) {
      $uid = $_GET['uid'];
      echo '<input type="text" name="uid" placeholder="Username"value="'.$uid.'">';
    }
    else {
      echo '<input type="text" name="uid" placeholder="Username">';
    }
    ?>
    <input type="text" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Sign up</button>
  </form>

  <?php
  /*
  //Get full URL
    $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "signup=empty") == true) {
      echo "<p class='error'>You did not fill in all fields!</p>";
      exit;
    } elseif (strpos($fullUrl, "signup=char") == true) {
      echo "<p class='error'>You entered some invalid characters!</p>";
      exit;
    } elseif (strpos($fullUrl, "signup=invalidemail") == true) {
      echo "<p class='error'>You entered an invalid email!</p>";
      exit;
    } elseif (strpos($fullUrl, "signup=success") == true) {
      echo "<p class='success'>You have been signed up!</p>";
      exit;
    }
  */

  if (!isset($_GET['signup'])) {
    exit;
  } else {
    $signupCheck = $_GET['signup'];

    if ($signupCheck == "empty") {
      echo "<p class='error'>You did not fill in all fields!</p>";
      exit;
    } elseif ($signupCheck == "char") {
      echo "<p class='error'>You entered some invalid characters!</p>";
      exit;
    } elseif ($signupCheck == "invalidemail") {
      echo "<p class='error'>You entered an invalid email!</p>";
      exit;
    } elseif ($signupCheck == "success") {
      echo "<p class='success'>You have been signed up!</p>";
      exit;
    }

  }




  ?>


</body>

</html>