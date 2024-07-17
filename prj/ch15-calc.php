<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chapter 15 Ex: PHP Calculator</title>
</head>
<body>

<form>
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">
  <select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select>
  <br>
  <button name="submit" value="submit" type="submit">Calculate</button>
</form>

<p>The answer is: </p>
<?php
  // First, Check if we have hit the submit button
  if (isset($_GET['submit'])) {
    echo "YES -- Sumbit has been pressed!";
  } else {
    echo "NO!!! Submit NOT pressed yet!!!";
  }
?>

</body>
</html>