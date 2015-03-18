<html>
<?php
function LOG-IN_Verification(){
$cookie= $_COOKIE['logged-in'];
//Checks if the value of the cookie(The password) has a match in the database.
$decision= mysqli_num_rows(mysqli_query($con, "SELECT * FROM Users WHERE Password LIKE '.$cookie.'"));
//If the password's cookie does have a match in the database...
 if (isset($_COOKIE['username']) && $decision>0)
 {
  
 }
 //otherwise
 else
 {
 //Redirects the user to the logg-in page if he doesn't have a cookie.
 echo "<meta http-equiv='refresh' content='0;url=http://jmail.allalla.com/logg-in.php'>";
 }
}
 ?>

?>
<head>

</head>
<body>
<form method="get">
<input type="text" name="Reciever" placeholder="To":> 
<br>
<br>
<input type="text"name="subject" placeholder="Subject:">
<br>
<br>
<br>
  <textarea name="Email" rows="20" cols="50" placeholder="Email...">
  </textarea>
  <br>
  <Input type="submit" name="Submit">
</form>
</body>
</html>
<?php
If(isset($_GET['Submit']))
{
If(strlen($_GET['Reciever'])>10 && strlen($_GET['Reciever'])<100 && strlen($_GET['subject'])>2 && strlen($_GET['subject'])>50 && strlen($_GET['Email'])>2 && strlen($_GET['Email'])>4096)
{
//Define variables. 
$Reciever=$_GET['Reciever'];
$subject=$_GET['Subject'];
$email=$_GET['Email'];
$sender=$_COOKIE['"username'];


//connecting to a mysql database
$con= mysqli_connect("mysql.1freehosting.com", "u357510163_johny", "fuckfuck", "u357510163_fuck");
//informs the user if there is an error in the connection.
if (mysqli_connect_errno())
{
echo "can't connect to the database";	
}
//Adds the emails into the database. 
mysqli_query(""); 

mysqli_close($con);
}
}
}

?>
