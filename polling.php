<?php

 $con = mysqli_connect("localhost","root","","users_db");
 
 if(isset($_POST['canteen'])) {
	 
	 $vote_canteen = " update players set canteen=canteen+1 ";
	 
	 $run_canteen = mysqli_query($con,$vote_canteen);
	 
	 if($run_canteen) {
		 
		 echo "<h2 align='center'> Your Vote Has Been Cast To Canteen !!</h2>";
		 echo "<h2 align='center'><a href='polling.php?results'>View Results </a>  </h2>";
		 }
}

 if(isset($_POST['gate'])) {
	 
	 $vote_gate = " update players set gate=gate+1 ";
	 
	 $run_gate = mysqli_query($con,$vote_gate);
	 
	 if($run_gate) {
		 
		 echo "<h2 align='center'> Your Vote Has Been Cast To GRE/GATE Classes !!</h2>";
		 echo "<h2 align='center'> <a href='polling.php?results'>View Results</a></h2>";
		 }
}

 if(isset($_POST['sports'])) {
	 
	 $vote_sports = " update players set sports=sports+1 ";
	 
	 $run_sports = mysqli_query($con,$vote_sports);
	 
	 if($run_sports) {
		 
		 echo "<h2 align='center'> Your Vote Has Been Cast To Sports/Ground !!</h2>";
		 echo "<h2 align='center'> <a href='polling.php?results'>View Results</a></h2>";
		 }
}

 if(isset($_POST['ragging'])) {
	 
	 $vote_ragging = " update players set ragging=ragging+1 ";
	 
	 $run_ragging = mysqli_query($con,$vote_ragging);
	 
	 if($run_ragging) {
		 
		 echo "<h2  align='center'> Your Vote Has Been Cast To Anti-Ragging !!";
		 echo "<h2  align='center'> <a href='polling.php?results'>View Results</a></h2>";
		 }
}



if(isset($_GET['results'])) {
	
	$get_votes=" select * from players";
	
	$run_votes=mysqli_query($con,$get_votes);
	
	$row_votes=mysqli_fetch_array($run_votes);
	
	$canteen=$row_votes['canteen'];
	$gate=$row_votes['gate'];
	$sports=$row_votes['sports'];
	$ragging=$row_votes['ragging'];
	
	$count = $canteen+$gate+$sports+$ragging;
	
	$per_canteen = round($canteen*100/$count) . "%";
	$per_gate = round($gate*100/$count) . "%";
	$per_sports = round($sports*100/$count) . "%";
	$per_ragging = round($ragging*100/$count) . "%";
	
	
	echo "
	
	<div class='container' style= ' adding:10px; text-align:center'>
	<center>
	
	
    <br></br>
	<h2> Results So Far : </h2>
	
	<p  style= 'background:black ;color:white; padding:10px;width:500px;'>
	
	<b> Canteen : </b> $canteen($per_canteen) </p>
	
	
	<p  style= 'background:black ;color:white; padding:10px;width:500px;'>
	
	<b> GRE/GATE : </b> $gate($per_gate) </p>
	
	<p  style= 'background:black ;color:white; padding:10px;width:500px;'>
	
	<b> Sports/Ground : </b> $sports($per_sports) </p>
	
	<p  style= 'background:black ;color:white; padding:10px;width:500px;'>
	
	<b> Ragging : </b> $ragging($per_ragging) </p>
	
	<a  href='thanks.php'> Exit</a>
				 
	
	<br></br> <br></br> <br></br> <br></br> <br></br> <br></br> <br></br> <br></br> 
	<br></br> <br></br> <br></br> <br></br> <br></br> <br></br> <br></br> <br></br> <br></br>
	
	
	";
	
	
	 
}



 


?>
<html>
  <head>
     <title> Polling Page </title>
     <style>
	      
		  body{
		   margin:0px auto;
           background-image:url("poll1.png");	
           background-repeat:no-repeat;		   
		   background-size:100%;
		   }
		   
		   .container{
		      width:1200px;
			  height:550px;
			  background-color:#000;
              margin:0px auto;
              
              margin-top:59px;
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

		.abc{
          font-size:20px;
		   color:white;
           
}
          h1{
            font-size : 50px;
			color :green;
			font-style :italic;
			margin-left:100px;
}


		
		input{
			margin : 10px;
			
		} 
		
		
		 
		 
		
		 
		 a{ color: red;
            font-size: 34px;
			}
			
			
		h2{
			font-size : 50px;
			color : red;
			font-style : italic;
			
		}

			p{
				color:white;
				font-size:26px;
			}
			
		
		
			
			
		 
	
	
	 </style> 
	<head>



		<body>
			
			<div class="container">
			
			<img src="mvsrlogo.png" alt="Polling">

			  <h1>Select any one that want to be implemented :</h1> <br></br>
              <form class="kmk"    method="post" action="" align="center" >
    <input type="submit" name="canteen" value="Canteen"><br><br>
	<input type="submit" name="gate" value="GRE/GATE couching centers"><br><br>
	<input type="submit" name="sports" value="SPORTS/GROUND"><br><br>
	<input type="Submit" name="ragging" value="Anti-Ragging"><br><br>
	
  </form>




			
			

			</div>
		</body>

</html>		












