<! Script to add newly registered people in to the Database -->

<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'head2.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];


$sql_admindatabase="Insert into admindatabase(Name ,Email , Gender, password , dob) values ('$name' , '$email' , '$Gender', '$password', '$dob')";

if(mysqli_query($connect, $sql_admindatabase) == true)
{
	echo "<center><h1><b>You have been sucessfully registered as a new Admin<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="adminindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><bYour Admin Registration Unsuccessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="AdminRegister.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?>
