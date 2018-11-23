<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>


	<title>Shango Wedding planner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.net p{display: none;
			color: pink;
			font-size: 10px;
		}
		
	</style>
</head>
<body>
<div class="main">


<div class="navbr">
<ul><li  class="nav"><a href="contact.html">contact</a></li>
	<?php if (!empty($_SESSION["name"])) { ?>
		<li  class="nav"><a href="#"><?php echo $_SESSION["name"]; ?></a></li>
		<li  class="nav"><a href="logout.php">Logout</a></li>
	<?php }
	else{?>
<li  class="nav"><a href="login.html">log in</a></li>
	<?php } ?>

</ul></div>
<div style="position: relative;; background-color:;height: 380px;width: 100%;background-image: url(background.jpg);">
	<div style="background-color: rgba(0,0,0,0.3);height: 380px;width: 100%">
		<div style="display: flex; justify-content: center;width: 100%;align-content: center;"><font size="6" style="color: white;margin-top: 50px"><b>The Best Way of wedding planning</b></font>

		</div>
		<form action="main.php" method="post" autocomplete="off">
			<div style="margin-left: 378px;margin-top: 120px;">
				<select name="loc" style="height: 40px;width: 200px;border-top-left-radius: 12px;border-bottom-left-radius: 12px">
				<option value="jaipur">jaipur</option>
				</select>
				<select name="plan" style="height: 40px;width: 200px;"><option>marrige garden</option>
				</select>
				<input type="submit" type="submit" name="insert" style="background-color: red;color: white;height: 40px;width: 200px;outline: none;border-top-right-radius: 12px;border-bottom-right-radius: 12px">Find
			</button>
			</div>
		</form>
	</div>
</div>

<div style="text-align: center; position:relative;margin-top: 30px;margin-left: 100px"><font size="6"><b>Find trusted wedding services in all Indian cities</b></font></div><br>
<a href="#"><div style=" height:200px;width: 270px; background-image: url(mehndi.jpg);margin-left: 10px;background-size:270px 200px;"><div class="net" style=" height:200px;width: 270px;  background-color:rgba(0,0,0,0.4);display: flex;justify-content: center;align-content: center;"><p>Mehndi</p></div></div></a>
<div style=" height:200px;width: 270px; background-image: url(invitation.jpg);margin-top:-200px; margin-left: 350px;  background-size:270px 200px;"><div class="net" style=" height:200px;width: 270px;  background-color:rgba(0,0,0,0.4);display: flex;justify-content: center;align-content: center;"><p>Invitation</p></div></div>
<div style=" height:200px;width: 270px; background-image: url(makeup.jpg);margin-top:-200px; margin-left: 670px;  background-size:270px 200px;"><div class="net" style=" height:200px;width: 270px;  background-color:rgba(0,0,0,0.4);display: flex;justify-content: center;align-content: center;"><p>Makeup</p></div></div>
<div style=" height:200px;width: 270px; background-image: url(photogrpher.jpg);margin-top:-200px; margin-left: 1000px;  background-size:270px 200px;"><div class="net" style=" height:200px;width: 270px;  background-color:rgba(0,0,0,0.4);display: flex;justify-content: center;align-content: center;"><p>Photogrpher</p></div></div>








<br><br>




<!--code above-->
</div>

</body>
</html>