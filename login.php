<?php 
		 	$a=$_POST['email'];
		 	$b=$_POST['pass'];	
		 	echo $a;
		 	$conn=mysqli_connect("localhost","root","","planner");
		 	$sql="select * from user where email='$a'&&password='$b'";
		 	$result=mysqli_query($conn,$sql);
		 		if (mysqli_num_rows($result))
			 		 {
			 		 	session_start();
				 		$row=mysqli_fetch_assoc($result);
			 			$_SESSION["name"]=$row['fname'];
			 			$_SESSION["lname"]=$row['lname'];
			 			echo "<script>
			 				window.location.assign('index.php');
			 			</script>";
			 		}
			 	else{?>
			 			<script type="text/javascript">
			 				alert("Invalid Inputs");
			 			</script>
			<?php 
			 	}
	 ?>