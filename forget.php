<?php
require_once('C:\xampp\htdocs\info_medics\connection.php');
require_once('C:\xampp\htdocs\info_medics\lib\function.php');
include('C:\xampp\htdocs\info_medics\PHPMailer\PHPMailerAutoload.php');
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		$query = "select * from user_details where user_email = '".$username."'";
		
		
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['user_email'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update user_details set otp = ".$otp.", otp_used = 0 where 
			user_email = '".$to."'";
	
		
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
		
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) {
					
					session_start();
					$_SESSION['user_id'] = $to;
					echo "<script>
								window.location='../home.php';
					      </script>";
				} else {
					
				}
				//$array = array('status' => '200' , 'details' => $arr);
			}	
			
		}	
		
	} else {
		echo "asdasasdad"; die;
	}	 
}

?>

<html>
<head>

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	
</head>
<body>
	<div class="main">  
 <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
	<div class="shape"></div>
        <div class="shape"></div>
    </div>	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Forget Password</label>
					<input type="email" name="email" placeholder="Email" required="">
					<button>Send OTP</button>
					
				 </div>	
				</form>
					 			 
		
	</div>

</body>
</html>