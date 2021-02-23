<?php

if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>
		Register Form
	</title>
</head>
<body>
<<form method="post">

    <p style="color:black;font-weight: bold;font-size: 28"> Basic Information:</p>

    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" required>
    <br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" required>
    <br>

    <label for="gen"><b>Gender</b></label>

    <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
    <br>

  <label for="email">Email:</label>
  <input type="text" name="email" required>
  <br>

  <p style="color:black;font-weight: bold;font-size: 28"> User Account Information:</p>

  <label for="uname">User Name:</label>
  <input type="text" name="username" required>
  <br>
  <label for="passwor">Password:</label>
  <input type="password" name="password" required>
  <br>
  <label for="remail">Recovery Email:</label>
  <input type="text" name="remail" required>
  <br>
  <input type="Reset">
  <br>
<input type="submit">


</form>
</body>
</html>