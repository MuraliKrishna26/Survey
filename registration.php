<?php
mysql_connect("localhost","root","");
mysql_select_db("users_db");
    if(isset($_POST['submit'])) {
		
		$id = $_POST['rollnumber'];
		$user_name = $_POST['name'];
		$user_dept= $_POST['dept'];
		$user_call = $_POST['pn'];
		$user_email = $_POST['email'];
		$user_pass = $_POST['password'];
		
		$query = "insert into users (id,user_name,user_dept,user_call,user_email,user_pass)
		values ('$id','$user_name','$user_dept','$user_call','$user_email','$user_pass')";
		
		if(mysql_query($query)){
			
			echo "<script>alert('Registration Sussess')</script>";
			
		}
		
		
		
		
	}

    







?>






<html>
  <head>
     <title> Registration Page </title>
     <style>
	      
		  body{
		   margin:0px auto;
           background-image:url("register.png");	
           background-repeat:no-repeat;		   
		   background-size:100%;
		   }
		   
		   .container{
		      width:500px;
			  height:600px;
			  background-color:#000;
              margin-left:90px;
              text-align :center;
              margin-top:130px;
              border-radius:5px;
			  opacity:.7;	
		   }
		 
		 .container img{
			
			width:110px;
			height:115p;
			border-radius:500px;
			background:#fff;
			padding:5px;
			margin-top:-60px;
            
			
			
		 }
		 
		 input {
		         width:300px;
				 height:45px;
				 font-size:17px;
				 margin-bottom:20px;
				 padding-left:30px;
				 background:#fff;
				 border:none;
		 
		 }
		 
		 .loginn{
		 
			border:none;
			padding:15px 30px;
			background:#2ecc71;
			border-radius:5px;
			cursor:pointer;
			border-bottom:5px solid #27AE60;
		 }
		 
		 a{ color: white;
            font-size: 14px;		 }
			
		h3{
		     color : white;
             font-style: italic			 }	
		 
	
	
	 </style> 
	<head>



		<body>
			
			<div class="container">
			
			<img src="mvsrlogo.png" alt="Polling">
			<h3> Registration Form </h3>
			<form method="post" action="registration.php">
             
			<input type="text" name="rollnumber" placeholder="Enter Your Roll Number">
			<input type="text" name="name" placeholder="Enter Your Full Name">
			<input type="text" name="dept" placeholder="Enter Your Department(eg : cse,ece etc )">
			<input type="text" name="pn" placeholder="Enter Your phone number ">
			<input type="text" name="email" placeholder="Enter Your Email ID">
			<input type="password" name="password" placeholder="Enter Your password">
			
			<br></br>
			
			<input type='submit' name='submit' value='Submit' class='loginn'>
			
			<br></br>
			<a href="login.php">Go To Login Page</a>
			
		
				
					
			</form>

			</div>
		</body>

</html>		












