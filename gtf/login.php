<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/signin1.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form id="myform" class="form-signin" action="test.php" method="post">
  <img class="mb-4" src="images/gc.png" alt width="100" height="100" />
  <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
  <label for="inputEmail" class="sr-only">User Name</label>
  <input type="text" name="username"  class="form-control" placeholder="User Name" required autofocus>
  <br>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <br>
  <button id="saveForm" class="btn btn-lg btn-primary btn-block" type="button">Login</button>
  
</form>
<center><span id="result"></span></center>
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
		</ul>
</body>
</html>
