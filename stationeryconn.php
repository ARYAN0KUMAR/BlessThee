<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index4.html");
    exit;
}
$server_name="localhost:3309";
$username="root";
$password="";
$database_name="blessthee";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{

   $username = $_SESSION["username"];
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $address2 = $_POST['address2'];
   $how = $_POST['how'];
   $type = $_POST['type'];
   $time = $_POST['time'];

	 $sql_query = "INSERT INTO stationary (UserName,First_Name,LastName,Email,PhoneNum,Address,Address2,wishtodonate,booktype,dates)
	 VALUES ('$username','$firstname','$lastname','$email','$phone','$address','$address2','$how','$type','$time')";

	 if (mysqli_query($conn, $sql_query))
	 {
		echo "Your Donation is scheduled successfully !";

    header("location: thanku.html");
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
