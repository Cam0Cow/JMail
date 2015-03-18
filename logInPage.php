<!DOCTYPE html>

<html>
<head>
<title>log in</title>
</head>
<body>
<link rel="stylesheet" href="sign-in.css"/>
<div class="top"><center><p class="sign-in"> Log In </p></center></div>
<hr/>
<br/>
<br/>
<br/>
<center>
<div class="div1">
<form action="" method="post">
<input type="text" name="username" placeholder="username">
<br>
<br>
<input type="password" name="password" placeholder="password">
<br>
<br>
<input type="submit" name="submit" value="Log In">
</form>
</div>
</center>
<?php
//checks if the user submitted the form and tells the program what to do in case he(The user) did send the form. 
if (isset($_POST['submit']))
{
//unsets the cookie
unset($_COOKIE['username']);
//defines the variables from the form.
$username=$_POST['username'];
$password=$_POST['password'];


//connecting to a mysql database
$con= mysqli_connect("mysql.1freehosting.com", "u357510163_johny", "fuckfuck", "u357510163_fuck");

//informs the user if there is an error in the connection.
if (mysqli_connect_errno())
{
echo "can't connect to the database";	
}

//Checks if there is a match in the database for the username and password entered.
//In other word, checks if the username & password are correct. 
$userpassword_validation=mysqli_num_rows(mysqli_query($con, "SELECT * FROM Users WHERE User_Name LIKE '.$username.' AND Password Like '.$password.' ")); 

//tells the program what to do if there is a match in the database. Meaning, the password and username are right. 
if ($userpassword_validation==1) 
{
//Sets cookies to store the user's username+password so that the browser remebers it when the user goes to a differnt page on the site.
setcookie("username", $username); 
setcookie("logged-in", $password); 
mysql_close($con);
//redirects the user to a different page. 
echo "<META http-equiv='refresh' content='0;URL=http://jmail.allalla.com/home.php'>";  

//exits the program
exit();	
}
//otherwise...
else
{
//informs the user that their password is incorrect. 
echo "<br><center><font color='red'>Your username or password are incorrect!.</center></font>";
}
}

?>


</body>
</html> 
