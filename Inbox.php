<html>
<head>
<title> Ibox </title>
<link rel="stylesheet" href="sign-in.css"/>
</head>
<body>
<div class="top"><center><p class="sign-in"> Inobx </p></center></div>
<hr/>
<br/>
<br/>
<br/>
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
//Queries the database for all of the emails sent to this specific user.
$query=mysql_query("SELECT * FROM Messages WHERE reciever LIKE '.$cookie.'");
//outputs the message from the database
if ($query->num_rows > 0) {
    // output data of each row
    while($row = $query->fetch_assoc()) {
        echo  "From: " . $row["sender"]. " subject: ". $row['subject']. "<form action='view_message.php'> <input type='hidden' name='id' value='" . $row['id']. "'> <input type='submit' name='submit' value='view message'> <br></hr>";    }
 
 }
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
