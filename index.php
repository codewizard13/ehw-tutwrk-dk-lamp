<?php
include 'header.php';
?>

<?php
echo $_POST['name'];

?>


<form method="post">
  <input type="hidden" name="name" value="Daniel">
  <button type="submit">PRESS ME!</button>
</form>

</body>

</html>