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
	 $CharityName = $_POST['CharityName'];
	 $DirectorName = $_POST['DirectorName'];
	 $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $address2 = $_POST['address2'];
   $type = $_POST['type'];
   $mission = $_POST['mission'];

	 $sql_query = "INSERT INTO partnership (UserName,CharityName,DirectorName,Email,PhoneNum,Address,Address2,category,Mission)
	 VALUES ('$username','$CharityName','$DirectorName','$email','$phone','$address','$address2','$type','$mission')";

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
