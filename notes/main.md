<link rel="stylesheet" href="../css/notes.css" />

# TUTORIAL NOTES

<a id="top-bookmark-btn" class="bookmark-link" href="#bookmark">JUMP TO BOOKMARK</a>


### VID: 1 - Introduction to PHP Programming 


##### PREQUISITES:

- Know HTML & CSS

##### HELPFUL TO KNOW:

- Know some JavaScript makes it easier understand PHP

##### DEFINITION: PHP

- **PHP**: PHP Hypertext Preprocessor; A backend / server-side programming language.

##### What you can do with PHP?

- Make a more dynamic website
- Only with HTML / CSS you make a static page with links and image
- With PHP you can make a dynamic site with a login system, registration signup, forum with post-capability.
- You will need a database in order to save data
- Server-side language is needed to connect the website to the database. This is what PHP is for
- Facebook & WordPress use PHP
- Easy to learn server-side languages
- Insert and get stuff from databases
- Create cookies
- Need to have SERVER acces

- PHP can be difficult for some people to learn in the beginning to those only familiar with HTML/CSS
 

### VID: 2 - Installing A Local Server for PHP 

- If you don't have a server running, it won't run inside the browser
- He's using **XAMPP**
- We use databases inside PHP to store data
- **htdocs**: Apache's `document root` for all sites

##### APACHE

Steps specific to this tutorial:

- Delete all subfolders in htdocs/
- Create new subfolder: **phplessons**
- Enter the folder 

!!! #GOTCHA: If the server isn't connected or isn't started in Chrome you will get the error on the webpage `This site can’t be reached`

### VID: 3 - Output In Browser Using PHP 

- This episode we will actually start writing PHP

!!! #GOTCHA: Make sure you have Apache server started / running

!!! #GOTCHA: If server is running, but there is no index.php, you will see a directory in the browser instead of the starting page

- Apache will automatically recognize index.html or index.php as the startpage

Basic HTML scaffolding / starting framework:

```htm
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
```

How to print things to the browser?

- **echo** or **print**
- echo loads faster
- Numbers with quotes around them are seen as text



### VID: 4 - How to Create PHP Variables 

!!! #GOTCHA: VSCode autogenerates the `action` property. Delete that and replace with `method` instead (at this point) because we are not using the action property yet.

Here is the code that is created in this lesson:

```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form method="GET">
  <input type="text" name="person">
  <button>SUBMIT</button>
</form>

<?php

  $name = $_GET['person'];
  echo $name . " is a handsome fellow!";

?>

</body>
</html>
```


### VID: 5 - How to Write Comments in PHP 

`// single line comment`

`/* multi
    line
    comment */'


### VID: 6 - What Are Internal Functions in PHP 

- **pre-determined function**: A function that already exists in the PHP language

- func: **strlen()**: Get string character length
- func: **str_word_count()**
- func: **strrev()**
- func: **strpos()**
- func: **str_replace()**

```php
echo strlen("Hi Daniel");
echo str_word_count("Hi Daniel");
echo strrev("Hi Daniel");
echo strpos("Hi Daniel", "Daniel");
echo str_replace("Daniel", "Jason", "Hi Daniel");
```



### VID: 7 - Different Data Types in PHP 

- **string**: can use double or single quotes
- **integer**: a number with no decimals
- **float**: a number with decimal precision
- **boolean**: a value that is either true or false (1 or 0)
- **array**: collection, list of comma-separated quoted values or numbers


### VID: 8 - What Are Arithmetic Operators in PHP 

All the normal add, subtract, multiply, divide ... plus:

- **modulus**: Percent symbol - returns the remainder of a divide operation
- **exponentiation**: Double asterisk - returns the number on the left to the power of the number on the right

```php
  // Arithmetic Operators
  //echo 5 % 5; // modulus = remainder
  // echo 8 % 5; // remainder should be 3
  echo 5**2; // exponentiation = power of
```


### VID: 9 - What Are Assignment Operators in PHP 

=, +=, /=, %=


### VID: 10 - What Are Comparison Operators in PHP 

Used in conditionals

- **==**: same value
- **=**: assignment operator
- **!=**: not same value
- **===**: same value and data type; useful for differentiating number from string
- **<**: less than
- **>**: greater than
- **<=**: 
- **>=**: 
- **!==**: not same number and data type
- **<>**: another version of not equal to

### VID: 11 - What Are Increment and Decrement Operators in PHP 

Increase or decrease a number by one

- **++**: add one; position matters
- **--**: subtract one; position matters

```php
// Increment/Decrement Operators
$x = 10;

// Add one then echo
echo ++$x; // 11

// Echo then add one
echo $x++; // 11
echo $x; // 12

// Minus one then echo
$x = 10;
echo --$x; // 9

// Echo then minus one
echo $x--; // 9
echo $x; // 8
```


### VID: 12 - What Are Logical Operators in PHP 

Logical operators allow comparison of more than one thing in conditional statements.

- **OR** or **||**
- **AND** or **&&**
- **XOR**: Only one condition can be true

```php
  // Logical Operators
  $x = 20;
  $y = 20;

  // Both are true so result is false
  echo '($x == $y xor 1 == 1) IS ';
  if ($x == $y xor 1 == 1) {
    echo "True<br>";
  } else {
    echo "False<br>";
  }

  // Only the condition on the right is true so result is true
  echo '($x == ($y/2) xor 1 == 1) IS ';
  if ($x == ($y/2) xor 1 == 1) {
    echo "True<br>";
  } else {
    echo "False<br>";
  }
  ```


### VID: 13 - Various Conditional Statements in PHP 

- **if**
- **elseif**: As many elseif conditions as you want; can be written `else if` also

<a id="bookmark" href="#top-bookmark-btn" title="back to top">BOOKMARK</a>

### VID: 14 - Switch Statements in PHP 

- Good if you are checking for different variables, but not for statements (according to Dani ?)

**Ex:**

```php
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
```

### VID: 15 - Exercise Using PHP 

**Build Calculator inside Browser**

- Added prj/ folder for mini projects / exercises

- First, we need to create a form to handle inputs
- The "name" attributes are what lets PHP (and other languages) access the form data

- Create basic form with two inputs like this:

```php
<form>
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">

</form>
```

- Add a select button for 'operator' (add, subtract, etc.)

```php
  <select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select>
```

- Add button with type, name, and value of "submit"

- Type 5 for num1 and 10 for num2 and click "Calculate" button:
- Nothing on screen, but values are added to URL as **query parameters**:

> http://dani-krossing.test/dk-lamp/prj/ch15-calc.php?num1=5&num2=10&operator=None&submit=submit

- Open php tags under the form
- Add check for if submit button pressed and if so, define inputs:

```php
<p>The answer is: </p>
<?php
  // First, Check if we have hit the submit button
  if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
  }
?>
```

- Add switch statement to handle the operator choice
- Finished result:

```php
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
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
      case "None":
        echo "ERROR: You need to select a method!";
      break;
      case "Add":
        echo $result1 + $result2;
      break;
      case "Subtract":
        echo $result1 - $result2;
      break;
      case "Multiply":
        echo $result1 * $result2;
      break;
      case "Divide":
        echo $result1 / $result2;
      break;
    }

  }
?>
```

!!! #GOTCHA: This works, but ERROR Uncaught TypeError: Unsupported operand types: string / string. Means numbers are being treated as strings, but need to be converted to numbers somehow


### VID: 16 - Exercise Using PHP 

!!! #TIP: Refer to W3Schools date params: https://www.w3schools.com/php/func_date_date.asp

- Add style to main.css and connect with link tag
- Add switch statement to print out current day name
- MODIFIED Dani's code to define the $dow_name variable in the the switch statement, instead of echoing out in the switch
- Final code:

```php
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
  ```


### VID: 17 - What Is a While Loop in PHP 

```php
<?php
  //Loop

  //While Loop
  //Do While Loop
  //For Loop
  //Foreach Loop

  $x = 1;

  while ($x <= 5) {
    echo "hi there<br>";
    $x++; // if this part is missing you may
    // encounter infinite loop condition error
  }
```


### VID: 18 - What Is a Do While Loop in PHP 

- Do-While loop: will always execute AT LEAST ONCE

```php
  $x = 1;

  do {
    echo "hi there<br>";
    $x++;
  }
  while ($x <= 5);
```

### VID: 19 - How to Create a For Loop in PHP 

```php
  for ($x = 0; $x <= 10; $x++) {
    echo $x+1 . " hi<br>";
  }
```


### VID: 20 - How to Create a Foreach Loop in PHP 

- Foreach loop deals with arrays
- No issues with infinite loops

```php
$array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

foreach ($array as $loopdata) {
  echo "My name is " . $loopdata . "<br>";
}
```

### VID: 21 - Using Arrays in PHP to Store Data 

- Pupose of arrays: store a lot of data in a single variable
- Access arrays with bracket notation like this:

```php
echo $array[0];
```

### VID: 22 - How to Create Your Own Function in PHP 

- User defined function: custom function we write to use in code later

```php
function newCalc( $x ) {
  $newnr = $x * 0.75;
  echo "Here is 75% of what you wrote: " . $newnr . "<br>";
}

$x = 100;
newCalc($x);

$a = 10;
newCalc($a);
```


### VID: 23 - How to Include Documents in PHP 

- Use `include` keyword. This is how we can separate out sections that are used on multiple pages, but maintain changes in one place (e.g., header.php, footer.php, etc.)

**file: header.php**

```php
<?php
  include 'functions/user-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDEX.php</title>
</head>
<body>

<header>
  <nav>
    <ul>
      <li><a href="">nav1</a></li>
      <li><a href="">nav2</a></li>
      <li><a href="">nav3</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>
```

### VID: 24 - Local and Global Scope in PHP 

- Variables defined inside a function have `local scope`

### VID: 25 - Different Superglobals in PHP 

!!! 🆕 NOW WE are starting to learn some NEW stuff I never knew!

- **$GLOBALS:** Includes these 4 superglobals [$_GET, $_POST, $_COOKIE, $_FILES] and any other custom variables in the global scope.
- Thus, the following code,

```php
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
```

will output,

```php
Array
(
    [_GET] => Array
        (
        )

    [_POST] => Array
        (
        )

    [_COOKIE] => Array
        (
        )

    [_FILES] => Array
        (
        )

    [x] => 5
    [name] => Johnson
)
```

### VID: 26 - POST and GET Superglobals in PHP 

- Allows you to pass information from a form into a URL that can be used on a separate page
- Form method: Tells the form whether to use GET or POST
- GET is visible in address bar, POST isn't

#GOTCHA: If you are using POST method, calling GET variables will fail and vice versa!

```php
<?php
echo $_POST['name'];

?>


<form method="post">
  <input type="hidden" name="name" value="Daniel">
  <button type="submit">PRESS ME!</button>
</form>
```

### VID: 27 - Session and Cookies in PHP 

- Cookie: saves info on the user / client side
- Session: saves info on the server
- Cookies are used to save info you aren't worried about getting hacked, like what size or type of clothing you like
- Sessions: used to store username and password. Closed when you shut down your browser
- Cookies: have time limits and will remember info until it expires

```php
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
```

### VID: 28 - How to Start a Session in PHP 

- $_SESSION variables aren't automatically remembered on various pages. `session_start()` at the top of each page is like saying "access this global space with session variables"
- You must put the following at the top of each page you want to reference the global $_SESSION variables on:

```
<?php
  session_start();
?>
```

- #TIP: `session_start()` is a good thing to put in a header.php include

### VID: 29 - How to Create a MySQL Database for PHP 

!!! 🛢 Finally we are working with DATABASES! 🛢

- phpMyAdmin
- He's using Xampp, but I'm using Largon

- Create database called `phplessons`

### VID: 30 - Create a MySQL Table in Database 

```sql
create table posts (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);
```
### VID: 31 - MySQL Insert Into Database 

```sql
INSERT INTO posts (subject, content, date)
VALUES (
  'This is the subject',
  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aspernatur commodi totam quis! Natus, unde?',
  '2015-11-14 16:38:01'
);
```


### VID: 32 - Select Data From MySQL Database 

```sql
SELECT subject FROM posts
```

```sql
SELECT * FROM posts
```

```sql
SELECT * FROM posts WHERE id='1'
```

```sql
SELECT * FROM posts WHERE id='1' AND subject='This is the subject'
```

### VID: 33 - Update Data From MySQL Database 

```sql
UPDATE posts
-- Change multiple fields:
SET subject='This is a test', content='This is the content'
WHERE id='1'
```

### VID: 34 - Delete Data From MySQL Database 

```sql
DELETE FROM posts
WHERE id='1'
```

### VID: 35 - Set Data Order From MySQL Database 

!!! #GOTCHA: His demo datetimes cause errors - cannot be zeros

```sql
INSERT INTO posts (subject, content, date) VALUES ('Subject 1','Content 1','2015-11-26 08:23:00');
INSERT INTO posts (subject, content, date) VALUES ('Subject 2','Content 2','2022-02-22 10:08:01');
```

```sql
SELECT * FROM posts ORDER BY id ASC
```

```sql
SELECT * FROM posts ORDER BY subject ASC
```

### VID: 36 - How to connect to a database in PHP 

- 💥 HERE THERE BE BREAKING CHANGES💥
- We are going to RE-ARCHITECT the REPO somewhat
- Create file: **includes/dbh.inc.php**:

```php
<?php
/**
 * dbh = database handler
 * .inc = this is an includes file
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

// #GOTCHA: The parameter order is important in the $conn definition
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
```

### VID: 37 - How to show database data on a website using MySQLi 

- Create new database called **loginsystem**
- Create table **users**:

```sql
CREATE TABLE users (
  user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  user_first varchar(256) not null,
  user_last varchar(256) not null,
  user_email varchar(256) not null,
  user_uid varchar(256) not null,
  user_pwd varchar(256) not null
);
```

- Add some users:

```sql
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Jane', 'Doe', 'jane@gmail.com', 'jane245a', 'test1234');

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Eric', 'Hepperle', 'support@erichepperle.com', 'erich', 'pass9911');
```

!!! #GOTCHA: When we are writing SQL in PHP we need to include a semicolon `;` within the double quotes

- Add this in the body:

```php
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
```

### VID: 38 - Insert data from a website into a database using MySQLi 

- Create **includes/signup.inc.php**:

```php
<?php

include_once 'dbh.inc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";

mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
```

- Change **index.php** to:

```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<style>
input {
  display: block;
}
</style>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <input type="text" name="last" placeholder="Lastname">
  <input type="text" name="email" placeholder="E-mail">
  <input type="text" name="uid" placeholder="Username">
  <input type="text" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>


</body>
</html>
```

- 10:11 - #GOTCHA: You could easily miss the fact that Dani MOVED the database include_once to signup.inc.php, because he says "copy it" ...

- 13:00 - #GOTCHA: It is not intuitive that you have to add single quotes around the PHP variables in the insert statement


### VID: 39 - Protect your database against SQL injection using MySQLi 

!!! #GOTCHA: To avoid SQL INJECTION, NEVER inject the form variables directly without sanitizing first!

- Using **mysqli_real_escape_string()** is one way to make form values safe:

```php
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
```

- Another, better, way is called **prepared statements**

### VID: 40 - What are Prepared Statements and how to use them 

- **SQL Injection**: When users write code in a form field that could damage the database

!!! #TIP: In PHP, always check for failure before checking for success to enable early escape clause

- Parameter types for the **mysqli_stmt_bind_param()** function:
  - s = string
  - i = integer
  - b = BLOB
  - d = double

!!! #GOTCHA: In `mysqli_stmt_bind_param()`, use if you have `n` questionmarks (placeholders), then you will normally have to write `n` "s", like this:

```php
//Bind parameters to the placeholder
mysqli_stmt_bind_param($stmt, "sss", $data1, $data2, $data3);
```

**File: index.php**

- Here's the php for the prepared SQL statement to get user with id of `Admin` inside index.php:

```php
<?php
$data = "Admin";
//Created a template
$sql = "SELECT * FROM users WHERE user_uid=?;";
//Create a prepared statement
$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL statement failed!<br>";
} else {
  //Bind parameters to the placeholder [replace]
  mysqli_stmt_bind_param($stmt, "s", $data);
  //Run parameters inside database
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['user_uid'] . "<br>";
  }
}
?>
```

---

#### Complete example of files needed:

**File: index.php**

```php
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
<style>
input {
  display: block;
}
</style>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <input type="text" name="last" placeholder="Lastname">
  <input type="text" name="email" placeholder="E-mail">
  <input type="text" name="uid" placeholder="Username">
  <input type="text" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>


</body>
</html>
```

**File: signup.inc.php**

```php
<?php

include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (! mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL error!<br>";
} else {
  mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
  mysqli_stmt_execute($stmt);
}

header("Location: ../index.php?signup=success");
```

### VID: 41 - What Are Error Handlers in PHP 

- Last example, but with a check for whether the submit button was pressed:

```php
<?php

if (! isset($_POST['submit'])) {
  header("Location: ../index.php?signup=error");
} else {
  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  ...
```

- How to ensure **valid email**:

```php
//Ensure is valid email
if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?signup=invalidemail");
} else {
  echo "Sign up the user!";
}
```


---

#### Complete example of signup.inc.php:

```php
<?php

if (! isset($_POST['submit'])) {
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
  } else {
    //Ensure is valid email
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../index.php?signup=invalidemail");
    } else {
      echo "Sign up the user!";
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
```



### VID: 42 - How to Display Error Messages Using PHP 

- How to get the full URL from **$_SERVER** variables:

```php
//Get full URL
$fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "\$fullUrl = $fullUrl<br>";
```

!!! #GOTCHA: To center BODY tag, or any BLOCK element make sure margin left and right is set to auto AND you must give the element a width less that 100%

#### Version 1: Error Checking with strpos on URL

**File: index.php**

```php
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
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="last" placeholder="Lastname">
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Sign up</button>
  </form>

  <?php
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
  ?>

</body>
</html>
```

#### Version 2: Error Checking with $_GET variables

**File: index.php**

```php
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
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="last" placeholder="Lastname">
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Sign up</button>
  </form>

  <?php
  if (!isset($_GET['signup'])) {
    exit;
  } else {
    $signupCheck = $_GET['signup'];

    if ($signupCheck == "empty") {
      echo "<p class='error'>You did not fill in all fields!</p>";
      exit;
    }
    elseif ($signupCheck == "char") {
      echo "<p class='error'>You entered some invalid characters!</p>";
      exit;
    }
    elseif ($signupCheck == "invalidemail") {
      echo "<p class='error'>You entered an invalid email!</p>";
      exit;
    }
    elseif ($signupCheck == "success") {
      echo "<p class='success'>You have been signed up!</p>";
      exit;
    }

  }
  ?>

</body>
</html>
```

!!! #GOTCHA: When echoing inputs, need to ensure any php variables are double and single quotes (don't forget to print quotes around the variable like `"'.$uid.'">'`)



#### Version 3: Error Checking with $_GET variables & remmbering sticky values

**File: index.php (just body tag)**

```php
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
```


#NOTE: The following signup code **doesn't actually write to the database**, but it does help us setup and test the error handling. Here is an example of how to remember the variables that are valid while blanking out the incorrect ones:

```php
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
...
```
**File: signup.inc.php**


```php
<?php

if (!isset($_POST['submit'])) {
  header("Location: ../index.php?signup=error");
} else {
  include_once 'dbh.inc.php';

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
}
```

### VID: 43 - Hashing and de-hashing data using PHP 

- Making a password unreadable - encoding and decoding
- **bcrypt**: a hashing / data encryption method built-into PHP that is always kept updated
- The SALT is automatically included
- **salting**: adding a random string into the encoding of the password

- `password_hash` encrypts your password
- `password_verify` decrypts your password (but doesn't show you the password, only if it matches)
- Here's the BODY tag:

```php
<?php
  // echo "test123";
  // echo "<br>";
  // echo password_hash("test123", PASSWORD_DEFAULT);
  // The hashed password is what needs to be inside the database
  //  Allow for at least 256 chars to future proof

  $input = "test123";
  $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

  echo password_verify($input, $hashedPwdInDb);
// At this point, even YOU as the website owner won't be able to read the hashed password. But, you can use the return value of 1 to know everything worked

// #GOTCHA: When using procedural PHP programming you should always use `prepared statements` because it is safer

?>
```







### VID: 44 - (UPDATED VIDEO IN DESC) How To Create A Login System In PHP For Beginners 
### VID: 45 - What are arrays used for in PHP - PHP tutorial
### VID: 46 - Insert data into array in PHP - PHP tutorial
### VID: 47 - Inserting database results into array in PHP - PHP tutorial
### VID: 48 - Different types of array in PHP - PHP tutorial
### VID: 49 - What are associative arrays in PHP - PHP tutorial
### VID: 50 - What are multidimensional arrays in PHP - PHP tutorial
### VID: 51 - Upload Files and Images to Website in PHP 
### VID: 52 - How to upload profile images to users using PHP - PHP tutorial
### VID: 53 - Delete profile image using PHP - PHP tutorial
### VID: 54 - How to delete files from folder - PHP tutorial
### VID: 55 - Delete more than one file or image in PHP - PHP tutorial
### VID: 56 - Search for full file name in PHP tutorial - PHP tutorial
### VID: 57 - How to create a search field with PHP and MySQLi 
### VID: 58 - How to Create A PHP Contact Form 
### VID: 59 - Functions Using Regular Expressions 
### VID: 60 - Search Patterns Using Regular Expressions 
### VID: 61 - How to Create a Unique String in PHP 
### VID: 62 - How to Remove the File Extension and Variables From the URL 
### VID: 63 - How to Create a PHP Gallery Part 1 
### VID: 64 - How to Create a PHP Gallery Part 2 
### VID: 65 - How to Create a PHP Gallery Part 3 










---






























