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
					<form class="login" action="/">
	<fieldset>
		<label for="usuario">User</label>
		<input type="text" id="name" class="form-text" />
		
	</fieldset>
	
	<fieldset>
		<label for="pass">Password</label>
		<input type="password" id="pass" class="form-text" />
	</fieldset>

	<fieldset class="form-actions">
		<a class="forgot" href="#">Forgot Your Password?</a> <input type="submit" value="Submit" />

	</fieldset>
	
	<fieldset class="check">
		<label class="signed"><input type="checkbox" /> Keep me signed in</label>
	</fieldset>
</form>		
				</div>
			</div>


			

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<form class="login" action="/">
	<fieldset>
		<label for="usuario">User</label>
		<input type="text" id="name" class="form-text" />
		
	</fieldset>
	
	<fieldset>
		<label for="pass">Password</label>
		<input type="password" id="pass" class="form-text" />
	</fieldset>

	<fieldset class="form-actions">
		<a class="forgot" href="#">Forgot Your Password?</a> <input type="submit" value="Submit" />

	</fieldset>
	
	<fieldset class="check">
		<label class="signed"><input type="checkbox" /> Keep me signed in</label>
	</fieldset>
</form>	
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
form.login fieldset
{
	display: block;
	font-size: 14px;
    margin: 0 0 10px;
    padding: 0 0 10px;
}

form.login fieldset label 
{
	display: block;
	margin: 4px 0 5px 0;
	font-weight: bold;
	clear: both;
}

form.login fieldset input[type="text"]
{
	padding: 5px 14px;
	font-size: 18px;
	border: 1px solid #ddd;
	background: #f5f5f5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

form.login fieldset input[type="password"] 
{
	padding: 5px 14px;
	font-size: 18px;
	border: 1px solid #ddd;
	background: #f5f5f5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
	

.forgot
{
	display: inline-block;
	padding: 0.5em 0.7em;
	font-size: 0.8em;
}


a 
{
	color: #E54D26;
    font-weight: 600;
}


form.login fieldset input[type="submit"] 
{
	padding: 10px 20px;
	font-size: 12px;
	border: 1px solid #ddd;
	background: #E54D26;
	font-weight: 100;
	margin-left: 30px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #fff;
}


form.login .signed
{
	font-size: 0.9em;
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