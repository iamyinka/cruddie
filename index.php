<?php 

include('config/db.php');

?>


<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>[INSERT SITE TITLE HERE]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[ENTER SITE DESCRIPTION HERE]">
    <meta name="author" content="[ENTER AUTHOR INFO HERE]">

    <link rel="apple-touch-icon" href="[INSERT apple-tuch-icon.png]">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start coding here -->
	
	<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CRUDDIE</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	
    <div class="container">
    	<ul class="nav nav-tabs">
    		<li>
    			<a href="#index" data-toggle="tab">Home</a>
    		</li>
    		
    		<li>
    			<a href="#login" data-toggle="tab">Log In</a>
    		</li>
    		<li>
    			<a href="#signup" data-toggle="tab">Register</a>
    		</li>
    		<li>
    			<a href="#admin" data-toggle="tab">Admin Area</a>
    		</li>
    	</ul>
    	
    	<div class="tab-content">
    		<div id="index" class="tab-pane fade in">
    			Home
    		</div>
    		
    		<div id="login" class="tab-pane fade in">
    			Login
    		</div>
    		
    		<div id="signup" class="tab-pane fade in">
    			Register
    		</div>
    		
    		<div id="admin" class="tab-pane fade in">
    			Admin Area
    		</div>
    	</div>
    </div>

    <!-- Coding End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
