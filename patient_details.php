<!DOCTYPE html>
<html >
<head>

<?php
include('connection.php');
require_once('connection.php');
//print_r($_POST);exit;
if (isset($_POST['aad']))
{
	
	$patient_aadhar = $_POST['aad'];
	$patient_fname = $_POST['fname'];
	$patient_lname = $_POST['lname'];
	$patient_contact = $_POST['phone'];
	$patient_age = $_POST['date'];
	$patient_email = $_POST['email'];
	$patient_gender = $_POST['gen'];
	
	
     $sql_query = "INSERT INTO `patient_details`(`patient_aadhar`, `patient_fname`, `patient_lname`, `patient_contact`, `patient_age`, `patient_email`, `patient_gender`)
	 VALUES	 ('$patient_aadhar','$patient_fname','$patient_lname','$patient_contact','$patient_age','$patient_email','$patient_gender')";
	

	if (mysqli_query($conn, $sql_query)) 
	{	
		echo "alert('Registered Successful !');
				window.location='../home.php'";
	}			
 
	else 
	{
		echo "Error Inserted record: " . mysqli_error($conn);
	}
 mysqli_close($conn);
 }
?>

  
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<STYLE>
* {
 padding: 0;
 margin: 0;
 box-sizing: border-box;
}
body {
 font-family: 'Open Sans', sans-serif, helvetica, Arial;
 font-weight: 400;
 font-size: 14px;
 color: black;

 background-image:  linear-gradient(black , gray , black);
 background-attachment: fixed;
 background-size: cover;
  
}
.container {
 max-width: 800px;
 width: 100%;
 margin: 0 auto;
}
#contact {
 background-color: #ADD8E6;
 padding: 20px;
 margin: 50px 0;
}
#contact input, button {
 font: 400 15px 'Open Sans', sans-serif, helvetica, Arial;
}
#contact h1 {
 font-size: 35px;
 font-weight: bold;
 text-align: center;
 color: blue;
}
#contact h3 {
 margin: 5px 0px 15px;
 text-align: center;
}
.row {
 display: flex;
 width: 100% !important;
 padding: 20px 0px;
}
.row .column {
 margin: 0px 20px;
 width: 50%;
}
fieldset {
 border: medium none !important;
 margin:  0 0 10px;
 min-width: 100%;
 width: 100%;
}
#contact input {
 width: 100%;
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 padding: 10px;
 margin: 5px 0;
}
input[type = "radio"] {
 width: 10% !important;
}
#contact .row .radio {
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 margin: 7px 0 10px;
 padding: 5px;
}
#contact .row .idCard{
 display: flex;
 height: 45px !important;
 margin: 5px 0;
}
#contact .row .idCard :first-child {
 width: 80px;
}
#contact .row .idCard :last-child {
 width: 40px;
}
#contact .row #phone {
 max-width: 100% !important;
 padding-right: 80px;
}
#contact input:hover {
 transition: border-color 0.3s ease-in-out;
 border: 1px solid rgb(68, 68, 68);
}
#contact button {
 outline: none;
 border: none;
 background-color: blue;
 color: white;
 margin: 0 0 5px 40%;
 padding: 10px;
 font-size: 17px;
 width: 150px;
}
 
#contact button:hover {
 background-color: rgba(0, 0, 255, 0.8);
}
 
#contact input:focus {
 outline: 0;
 border: 1px solid red;
}
 

@media screen and (max-width: 580px)  {
 .row {
  flex-direction: column;
 }
 .row .column {
  width: 90% !important;
 }
 #contact .row #phone {
 padding-right: 180px;
}
}

 background-attachment: fixed;
 background-size: cover;
  
}
.container {
 max-width: 800px;
 width: 100%;
 margin: 0 auto;
}
#contact {
 background-color: #ADD8E6;
 padding: 20px;
 margin: 50px 0;
}
#contact input, button {
 font: 400 15px 'Open Sans', sans-serif, helvetica, Arial;
}
#contact h1 {
 font-size: 35px;
 font-weight: bold;
 text-align: center;
 color: black;
}
#contact h3 {
 margin: 5px 0px 15px;
 text-align: center;
}
.row {
 display: flex;
 width: 100% !important;
 padding: 20px 0px;
}
.row .column {
 margin: 0px 20px;
 width: 50%;
}
fieldset {
 border: medium none !important;
 margin:  0 0 10px;
 min-width: 100%;
 width: 100%;
}
#contact input {
 width: 100%;
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 padding: 10px;
 margin: 5px 0;
}
input[type = "radio"] {
 width: 10% !important;
}
#contact .row .radio {
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 margin: 7px 0 10px;
 padding: 5px;
}
#contact .row .idCard{
 display: flex;
 height: 45px !important;
 margin: 5px 0;
}
#contact .row .idCard :first-child {
 width: 80px;
}
#contact .row .idCard :last-child {
 width: 40px;
}
#contact .row #phone {
 max-width: 100% !important;
 padding-right: 80px;
}
#contact input:hover {
 transition: border-color 0.3s ease-in-out;
 border: 1px solid rgb(68, 68, 68);
}
#contact button {
 outline: none;
 border: none;
 background-color: blue;
 color: white;
 margin: 0 0 5px 40%;
 padding: 10px;
 font-size: 17px;
 width: 150px;
}
 
#contact button:hover {
 background-color: rgba(0, 0, 255, 0.8);
}
 
#contact input:focus {
 outline: 0;
 border: 1px solid red;
}
 

@media screen and (max-width: 580px)  {
 .row {
  flex-direction: column;
 }
 .row .column {
  width: 90% !important;
 }
 #contact .row #phone {
 padding-right: 180px;
}
}
</STYLE>
</head>
<body>
    <div class="container">
        <form id="contact" action="" method="post">
            
            <h1 align='center'>REGISTER BY AADHAR</h1>
            <div class="row">
                
                <div class="column">                        
                    <fieldset>FIRST NAME
                        <input type="text" placeholder="ENTER FIRST NAME *" name="fname" required autofocus>
                    </fieldset>
                    <fieldset>LAST NAME
                        <input type="text" placeholder="ENTER LAST NAME *" name="lname" required autofocus>
                    </fieldset>		
                    <fieldset>E-MAIL
                        <input type="email" placeholder="ENTER YOUR E-MAIL *" name="email" required autofocus>
                    </fieldset>
                    <fieldset>DATE OF BIRTH
                        <input type="DATE" name="date" onfocus="(this.type = 'date')" required autofocus>
                    </fieldset>
  

                 
                </div>
                
                <div class="column">
                    <fieldset>MOBILE NUMBER
                        <input type="text" placeholder="Phone number " maxlength="10" name="phone" id="phone" required autofocus>
                    </fieldset>
                    <fieldset>
                        <p>WHAT IS YOUR GENDER?</p>
                        <div class="radio">
                            <input type="radio" id="male" name="gen" required>
                            <label for="male">Male</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="female" name="gen" required>
                            <label for="female">Female</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <fieldset>ADHAR CARD NUMBER
                        <input type="text" placeholder="ADHAR CARD NUMBER " name="aad" maxlength="12" required>
                    </fieldset>
                    
                    
		  
                </div>
            </div>
           
            <fieldset>
                <input type="submit" name="submit" id="button">Submit Now</button>
            </fieldset>
        </form>
    </div>


    
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
     separateDialCode: true
     });
  </script>
</body>
</html>