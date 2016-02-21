<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

	    <title>Login</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Bootstrap theme -->
	    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="css/custom.css" rel="stylesheet">

	    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	    <script src="../js/ie-emulation-modes-warning.js"></script>

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		  <?php 
		  	include_once("functions/display_functions.php");
		  	include_once("functions/logic_functions.php");

		  	//check session
		  	checkSessionLogin();
			?>
	  </head>

	  <body role="document">
	  		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		      <div class="container">
		      	<div class=center_this >
				<div class=accenture_logo>
		        	<img src=images/accenture.png />
		        	<!--<img id=dash src=images/dash.png />-->
		        	<br>
		        	<img id=boi_white src=images/boi_white.png />
		        </div>
		       	</div>
		       </div>
		    </div>
		    
		   
			    <div class="container">
			     <div class=signin_container>
			      <form class="form-signin" role="form" action="functions/logic_functions.php" method="POST">
			        <h2 class="form-signin-heading">Please login</h2>
			        <input name="eid" type="text" class="form-control" placeholder="Enterprise ID" required autofocus>
			        <input name="pw" type="password" class="form-control" placeholder="Password" required>
			        
			        <button name="btn_login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			      </form>

			    </div> <!-- /container -->
			</div>


	<script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/ajax_me.js"></script>

	 </body>
	 </html>