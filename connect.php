<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($user_details,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['user_id'];
	 $last_name = $_POST['user_fname'];
	 $gender = $_POST['user_email'];
	 $email = $_POST['user_contactno'];
	 $phone = $_POST['user_password'];

	 $sql_query = "INSERT INTO user_details (user_id,user_fname,user_email,user_contactno,user_password)
	 VALUES ('$user_id','$user_fname','$user_email','$user_contactno','$user_password')";

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