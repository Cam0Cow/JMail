<html>
<head>
<title> View Message</title>
<link rel="stylesheet" href="sign-in.css"/>
</head>
<body>
<div class="top"><center><p class="sign-in"> View Message </p></center></div>
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
$id=$_POST['id']; 
$query= mysql_query("SELECT * FROM Messages WHERE id LIKE '.$id.'" ,$con);


    // output data of each row

$row = mysql_fetch_array($query); 
    
    echo "From: ". $row['sender']. "</br> </Hr>";
    echo  "<br> Message: <br>". $row['message']. "<br> ";

 ?>
 

</body> 
</html>
