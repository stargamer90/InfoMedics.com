<?php
include('connection.php');
require_once('connection.php');


$server_name="localhost";
$username="root";
$password="";
$database_name="hospital_management";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['login']))
{	
	 $user_user_id = $_POST['user_id'];
	 $user_fname = $_POST['user_fname'];
	 $user_email = $_POST['user_email'];
	 $user_contactno = $_POST['user_contactno'];
	 $otp = $_POST['otp'];

	 $sql_query = "INSERT INTO entry_details (user_id,user_fname,user_email,user_contactno,otp)
	 VALUES ('$user_id','$user_fname','$user_email','$user_contactno','$otp')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>