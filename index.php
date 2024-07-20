<?php
  include 'header.php';
?>

<?php
/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$x = 5;

$name = "Johnson";

function something() {
  $y = 10;

  // This is a REFERENCE to $x and will change the original
  // $myVar = $GLOBALS['x'];

  // echo "\$myVar = $myVar<br>";

  echo "<pre>".print_r($GLOBALS, true)."</pre>";

}

something();










?>

</body>
</html>