<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



	
	
	<title>Home</title>
</head>
<body>

	<div class="wrapper">
	
		<header>
			<h1 ><a class="logo" href="index.php">matryoshka.css</a></h1>

			
		</header>

		<aside>
			<nav>
				<?php include 'navigation.php' ?>


			</nav>
			
		</aside>

		<div class="content">

			<div class="example" dat-titulo="heading">
				<h3 class="tag">example</h3>
				<div class="loadexample">
					<form  class="search">
	<fieldset>
		<input type="text"/>
		<input type="submit" value="Search" />
	</fieldset>
</form>
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<form  class="search">
	<fieldset>
		<input type="text"/>
		<input class="submitorange" type="submit" value="Search" />
	</fieldset>
</form>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.search
{
	position: relative;
}


.search:before
{
	content: '\e007';
	font-family: 'icomoon';
	position: absolute;
	top: 13px;
	left: 10px;
	color: #E54D26;
}


form fieldset 
{
    font-size: 14px;
    margin: 0 0 10px;
    padding: 0 0 10px;
}


form.search fieldset input[type="text"] 
{
	padding: 10px 14px;
	padding-left: 35px;
	font-size: 18px;
	border: 1px solid #ddd;
	background: #f5f5f5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}


form.search fieldset input[type="submit"] 
{
	padding: 10px 14px;
	font-size: 12px;
	border: 1px solid #ddd;
	background: #E54D26;
	font-weight: 100;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #fff;
}
</textarea>
		</div>			
	</div>

</div>	
	
		


	</div>
	<script src="js/jquery-1.9.1.min.js"></script>	
<script src="js/app.js"></script>
</body>
</html>