<?php 
date_default_timezone_set('Europe/Skopje');
require "Select.php";
require "Database.php";

$browsers = ["Firefox", "Chrome", "Internet Explorer", "Safari", "Opera", "Other"];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>
 
<?php if(!isset($_POST['submit'])):?>
 
<form method="post" action="">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
<?php
$select = new Select;
$select->setName("Browsers");
$select->setValue($browsers);
$select->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go"/>
</form>

<?php elseif (isset($_POST['submit'])):?>

<?php
      if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['Browsers'])) {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $browser = $_POST['Browsers'];
        $createdAt = date("Y-m-d H:m:s");

        $db = new DB;
        $db->createUser(trim($_POST['name']), trim($_POST['username']), trim($_POST['email']), $_POST['Browsers'], date("Y-m-d H:m:s"));

        echo "<p>Successfuly created user: <b>".$username."</b> in: <b>".$browser."</b> browser, at: <b>".$createdAt."</b></p>";

      }else {
        echo "<script> alert('All fields must be field!')</script>";
      }
?>

<?php endif; ?>

 </body>
 </html>
 