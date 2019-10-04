<!DOCTYPE html>
<html>
<head>
<title>Register as a Volunteer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="css.css" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Green Task Force Registration</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			<!--starting web form-->
				<form id="myform" action="add/add_green_task.php">
					<input class="text" type="text" name="F_Name" placeholder="First Name" required="">
					<br><br>
					<input class="text" type="text" name="L_Name" placeholder="Last Name" required="">
					<br><br>
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<br><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" id="saveForm" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<span id="result"></span>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script>
      $("#saveForm").click(function(){
          $.post( $("#myform").attr("action"), $("#myform :input").serializeArray(), function(info){ $("#result").html(info); });
          clearInput();

      });

      $("#myform").submit(function(){
          return false;
      });

      /*function clearInput(){

       $("#myform :input").each(function(index, element) {
       $(this).val('NA');
       });

       }*/
  </script>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>