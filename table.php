<?php

$server="localhost";
$user="root";
$pw="";
$dbname="db";
$email=$_POST["email"];
$psw=$_POST["psw"];
$gender=$_POST["gender"];


$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{

$sql1="SELECT * FROM signup Where email='$email'";

		$res=mysqli_query($conn,$sql1);
		if (mysqli_num_rows($res)>0){
			echo "record valid";
			echo '<a href="language.html"><br><br>Click here to go to the next page.</a>';
			}
		
		else{
			$sql="INSERT INTO signup(email,psw,gender) VALUES('$email','$psw','$gender')";
if (mysqli_multi_query($conn,$sql)){
		echo "Value has been recorded successfully!";
		echo '<a href="language.html"><br><br>Click here to go to the next page.</a>';
	}

	else {
		echo "Value already exists. Thank you!";
	    echo '<a href="language.html"><br><br>Click here to go to the next page.</a>';
		
		}

	}
}
	mysqli_close($conn);
?>