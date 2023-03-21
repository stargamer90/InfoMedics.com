<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Information Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
    
    
</head>
<body class="a">                            
		<div class="main">
			<div class="header">
				<a href="doctors info form.html"><img src="12.jpg"/></a></div>
					
			<div class="mainmenu">
				<ul>
					<li ><a href="home.html">Home </a></li>
					<li><a href="specialists.html">Specialist</a></li> 
					<li><a href="PatientsCare.html">Patient Care </a></li>
					<li><a href="staffaccount.html">Staff Account</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contuct Us</a></li>
				</ul>
			</div>

			<div class="a">
                <h2><br/>Doctors info Form</h2>
                <form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">


                    <p>
                            <h2>Doctor ID: 345678
                            </h2>
                            </p>

                    </br>
            
                <h3><br/>Doctor Name</h3>    
                <p>
                        <label>First Name:  
                        <input type="text" name="first_name" placeholder="Enter first name" required>
                        </label> 

                        <label>Middle Name: 
                        <input type="text" name="middle_name" placeholder="Enter middle name">
                        </label>

                        <label>Last Name: 
                        <input type="text" name="Last_name" placeholder="Enter last name" required>
                        </label>
                </p>
                
                    <p>
                            <label>Date of Birth:
                            <input type="datetime-local" name="doc_dob" required>
                            </label>
                           

                            <fieldset>
                                        <legend>Gender:</legend>
                                        <p><label class="choice"> <input type="radio" name="gender" required value="male">Male</label></p>
                                        <p><label class="choice"> <input type="radio" name="gender" required value="female">Female</label></p>
                                        <p><label class="choice"> <input type="radio" name="gender" required value="others">Others</label></p>
                                        </fieldset>

                            <label>Date of appointment:
                                        <input type="datetime-local" name="appointment_time" required>
                                        </label>
                                        </p>
                </br>

                <h3>Educational Qualifications:</h3> 
                <table id = "table">
                        <tr>
                            <th>Serial</th>
                            <th>Degree</th>
                            <th>Board/Institute</th>
                            <th>Year</th>
                            <th>Division/CGPA</th>
                            <th>Position</th>
                        </tr>
                        <tr>
                            <td><label>1.</label></td>
                            <td>SSC/O'Levels</td>
                            <td><input type="test" name="inst_name" placeholder="insert institute name" required></td>
                            <td><input type="test" name="year" placeholder="insert year of graduation"required></td>
                            <td><input type="test" name="div/cgpa" placeholder="insert division/cgpa"required></td>
                            <td><input type="test" name="position" placeholder="insert position"required></td>
                        </tr>

                        <tr>
                                <td><label>2.</label></td>
                                <td>HSC/A'Levels</td>
                                <td><input type="test" name="inst_name"required></td>
                                <td><input type="test" name="year"required></td>
                                <td><input type="test" name="div/cgpa"required></td>
                                <td><input type="test" name="position"required></td>
                        </tr>

                        <tr>
                                <td><label>3.</label></td>
                                <td>MBBS</td>
                                <td><input type="test" name="inst_name"required></td>
                                <td><input type="test" name="year"required></td>
                                <td><input type="test" name="div/cgpa"required></td>
                                <td><input type="test" name="position"required></td>
                        </tr>
                        <tr>
                                <td><label>4.</label></td>
                                <td><input type="test" name="degree" placeholder="insert degree"></td>
                                <td><input type="test" name="inst_name"></td>
                                <td><input type="test" name="year"></td>
                                <td><input type="test" name="div/cgpa"></td>
                                <td><input type="test" name="position"></td>
                        </tr>
                        <tr>
                                <td><label>5.</label></td>
                                <td><input type="test" name="degree"></td>
                                <td><input type="test" name="inst_name"></td>
                                <td><input type="test" name="year"></td>
                                <td><input type="test" name="div/cgpa"></td>
                                <td><input type="test" name="position"></td>
                        </tr>
        
                       
                </table>
                    
            </br>

            <h3>Experience:</h3> 
                    <table id = "table">
                            <tr>
                                <th>Serial</th>
                                <th>Job Designation</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Organization</th>
                            </tr>
                       <tr>
                               <td><label>1.</label></td>
                               <td><input type="test" name="job_desg" placeholder="insert job designation" required></td>
                               <td><input type="date" name="from" placeholder="insert starting date" required></td>
                               <td><input type="date" name="to" placeholder="insert regination date" required></td>
                               <td><input type="test" name="org_name" placeholder="insert name of organization" required></td>
                       </tr>
                       <tr>
                                <td><label>2.</label></td>
                                <td><input type="test" name="job_desg" ></td>
                                <td><input type="date" name="from" ></td>
                                <td><input type="date" name="to" ></td>
                                <td><input type="test" name="org_name"></td>
                         </tr>
                         <tr>
                                <td><label>3.</label></td>
                                <td><input type="test" name="job_desg" ></td>
                                <td><input type="date" name="from" ></td>
                                <td><input type="date" name="to" ></td>
                                <td><input type="test" name="org_name"></td>    </tr>
                        <tr>
                                <td><label>4.</label></td>    
                                <td><input type="test" name="job_desg" ></td>
                                <td><input type="date" name="from" ></td>
                                <td><input type="date" name="to" ></td>
                                <td><input type="test" name="org_name"></td>   
                        </tr>
                        <tr>
                                <td><label>5.</label></td>
                                <td><input type="test" name="job_desg" ></td>
                                <td><input type="date" name="from" ></td>
                                <td><input type="date" name="to" ></td>
                                <td><input type="test" name="org_name"></td>
                        </tr>

                    </table>
                   
                
                    
                    <br/>

                   
                    <fieldset>
                        <legend>Membership:</legend>
                        <label class="choice"> <input type="radio" name="membership" required value="BMA">BMA</label>
                        <label class="choice"> <input type="radio" name="membership" required value="brit_med">British Medical Society</label>
                        <label class="choice"> <input type="radio" name="membership" required value="amer_med">American Medical Society</label>
                        <label class="choice"> <input type="radio" name="membership" required value="others">Others</label></p>
                        </fieldset>
                        
                    <p><button>Submit form</button></p>
                    
                    </form>
              </div>

			<div class="footer">
				<p> <b> &copy; All Rights Reserved by We Care Hospital </b></p>

			</div>
			
			
		</div>
		

</body>
</html><SCRIPT Language=VBScript>