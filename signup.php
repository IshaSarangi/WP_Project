<?php

$server="localhost";
$user="root";
$pw="";
$dbname="db";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="CREATE TABLE signup(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(20) NOT NULL, 
        psw VARCHAR(20) NOT NULL,
        gender VARCHAR(20))";
    if (mysqli_query($conn,$sql1))
		echo "TABLE created successfully";

	else 
		echo "TABLE not created successfully";

}
mysqli_close($conn);


?>