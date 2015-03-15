<html>
<head>
<title>  Home </title>
</head>
<body>

<?php
//connecting to a mysql database
$con= mysql_connect("mysql.1freehosting.com", "u357510163_johny", "fuckfuck");

mysql_select_db("u357510163_fuck");
//informs the user if there is an error in the connection.
if (!$con)
{
echo "can't connect to the database";	
}
//Defines a variable for the password's cookie.
$cookie= $_COOKIE['logged-in'];

//Checks if the value of the cookie(The password) has a match in the database.
$decision= mysql_num_rows(mysql_query("SELECT * FROM Users WHERE Password LIKE '.$cookie.'", $con));

//If the password's cookie does have a match in the database...
 if (isset($_COOKIE['username']) && $decision>0)
 {
 //Welcomes the user.
 echo "Welcome ".$_COOKIE['username']. "! <BR> You have successfully logged in!";
 }
 //otherwise
 else
 {
 //Informs the user that he isn't logged in. 
 echo "you aren't logged in!";
 }
 ?>
</body>
</html>
