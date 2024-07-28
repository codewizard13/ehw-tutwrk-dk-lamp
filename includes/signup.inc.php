<?php

if (!isset($_POST['submit'])) {
  header("Location: ../index.php?signup=error");
} else {
  include_once 'dbh.inc.php';

  // $first = mysqli_real_escape_string($conn, $_POST['first']);
  // $last = mysqli_real_escape_string($conn, $_POST['last']);
  // $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  // $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //Ensure the post variables aren't empty
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../index.php?signup=empty");
    exit();
  } else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../index.php?signup=char");
      exit();
    } else {
      //Check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
        exit();
      } else {
        echo "Sign up the user!";
        header("Location: ../index.php?signup=success");
        exit();
      }
    }
  }


  // $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
  // $stmt = mysqli_stmt_init($conn);

  // if (! mysqli_stmt_prepare($stmt, $sql)) {
  //   echo "SQL error!<br>";
  // } else {
  //   mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
  //   mysqli_stmt_execute($stmt);
  // }

  // header("Location: ../index.php?signup=success");  

}


