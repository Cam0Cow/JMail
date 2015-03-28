<html>
<?php
 if (!isset($_COOKIE['username']) && !isset($_COOKIE['logg-in']))
 {
  //Redirects the user to the logg-in page if he doesn't have a cookie.
 echo "<meta http-equiv='refresh' content='0;url=http://jmail.allalla.com/logg-in.php'>"; 
 }

 ?>


<head>
<link rel="stylesheet" href="sign-in.css"/>
</head>
<body>
<div class="top"><center><p class="sign-in"> Compose message </p></center></div>
<hr/>
<br/>
<br/>
<br/>
<center>
<div class="div3">
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
If(strlen($_GET['Reciever'])>10 && strlen($_GET['Reciever'])<100 && strlen($_GET['subject'])>2 && strlen($_GET['subject'])<100 && strlen($_GET['Email'])>2 && strlen($_GET['Email'])<4096)
{
//Define variables. 
$Reciever=$_GET['Reciever'];
$subject=$_GET['Subject'];
$email=$_GET['Email'];
$sender=$_COOKIE['username'];

//connecting to a mysql database
$con= mysqli_connect("mysql.1freehosting.com", "u357510163_johny", "fuckfuck", "u357510163_fuck");
//informs the user if there is an error in the connection.
if (mysqli_connect_errno())
{
echo "can't connect to the database";	
}

//Adds the emails into the database. 
$query=mysqli_query($con, "INSERT INTO Messages(sender, reciever, message, subject) VALUES('.$sender.', '.$Reciever.', '.$email.', '.$subject.')");

mysqli_close($con);
}
}


?>
