<?php
include 'header.php';
?>

<?php
/*
$_COOKIE
$_SESSION
*/

// 86,400 ms = 1 day
// Subtracting from time() will cause a negative
//  and automatically destroy the cookie
setcookie( "name","Daniel", time() + 86400 );

$_SESSION['name'] = "ID-12";

function printArr($arr) {
  echo "<pre>".print_r($arr, true)."</pre>";
}

echo '<h3>$_COOKIE</h3>';
printArr($_COOKIE);
echo '<h3>$_SESSION</h3>';
printArr($_SESSION);

?>
</body>

</html>