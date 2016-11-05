<?php
 mysql_connect("localhost","root","");
 mysql_select_db("users_db");
 
 
 
 if(isset($_POST['login'])) {
	 
	 
	 $rollnumber=$_POST['rollnumber'];
	 $password=$_POST['password'];
	  
     $check_user=" select * from users where id='$rollnumber' AND user_pass='$password'";

		$run = mysql_query($check_user);
		 
		 if(mysql_num_rows($run)>0) {
			 
			 echo "<script> window.open('after_login.php','_self') </script> ";
		 }
		 else{
			 echo "<script>alert('Not Matching')</script>";
		 }
	 
	 
 }












?>


<html>
  <head>
     <title> Login Here </title>
     <style>
	      
		  body{
		   margin:0px auto;
           background-image:url("mvsr2.png");	
           background-repeat:no-repeat;		   
		   background-size:100%;
		   }
		   
		   .container{
		      width:500px;
			  height:400px;
			  background-color:#000;
              margin:0px auto;
              text-align :center;
              margin-top:150px;
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
		 
		 input[type="text"],[type="password"] {
		         width:300px;
				 height:45px;
				 font-size:17px;
				 margin-bottom:20px;
				 padding-left:30px;
				 background:#fff;
				 border:none;
		 
		 }
		 
		 .login{
		 
			border:none;
			padding:15px 30px;
			background:#2ecc71;
			border-radius:5px;
			cursor:pointer;
			border-bottom:5px solid #27AE60;
		 }
		 
		 a{ color: green;
            font-size: 14px;		 }
		 
	
	
	 </style> 
	<head>



		<body>
			
			<div class="container">
			
			<img src="mvsrlogo.png" alt="Polling">
			
			<form method="post" action="login.php">
				<div class="form-input">
				<input type="text" name="rollnumber" placeholder="Enter Your Roll Number">
				</div>
				
				<div class="form-input">
				<input type="password" name="password" placeholder="Enter Your Password">
				</div>
				
				<input type="submit" name="login" value="Login" class="login">
				
				<br></br>
				<a href="registration.php"> Not Yet Registered <a>
				<br></br>
				
				
				
				
				
				
			</form>

			</div>
		</body>

</html>		












