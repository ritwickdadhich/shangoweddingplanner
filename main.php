<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>


	<title>Shango Wedding planner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
	<?php } ?></ul></div>
<div style="position: relative;; background-color:;height: 380px;width: 100%;background-image: url(background.jpg);">
	<div style="background-color: rgba(0,0,0,0.3);height: 380px;width: 100%">
		<div style="display: flex; justify-content: center;width: 100%;align-content: center;"><font size="6" style="color: white;margin-top: 50px"><b>The Best Way of wedding planning</b></font>

		</div>
		
	</div>
</div>

<div style="text-align: center; position:relative;margin-top: 30px;margin-left: 100px"><font size="6"><b>Find trusted wedding services</b></font></div><br>
<div></div>

<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-4"><img src="garden.jpg" height="300" width="400"></div>
	<div class="col-md-7">Gangotri Garden <br> Gopalpura Bypass <br>Mob No.-9845631234 <br> city-Jaipur</div>
</div>
</div>
<div class="row">
	<div class="col-md-12">
	<div class="col-md-4"><img src=""></div>
	<div class="col-md-8">Krishna Paradise<br> Tonk road<br>Mob No.-9843921234 <br> city-Jaipur</div>
</div></div>
</div>
<br><br>




<!--code above-->
</div>

</body>
</html>