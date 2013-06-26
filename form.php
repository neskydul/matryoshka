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
					<form class="simpleform" action="#">

	<fieldset>
		<label for="nombre">Name</label>
		<input type="text" id="nombre" class="input-text" />
		<p class="form-help">This is help text under the form field.</p>
	</fieldset>
	
	<fieldset>
		<label for="email">Email</label>
		<input type="email" id="email" class="input-text" />
	</fieldset>
	
	<fieldset>
		<label for="gender">Gender</label>
		<select id="gender">
			<option>Male</option>
			<option>Female</option>
			
		</select>
	</fieldset>

	<fieldset class="radio">
		<label for="notifications">Notifications</label>
		<ul>
			<li><label><input type="radio" name="notifications" /> Send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Don't send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Send me flowers</label></li>
		</ul>
	</fieldset>

	<fieldset>
		<label for="url">URL</label>
		<input type="url" id="url" class="input-text" placeholder="http://yourdomain.com" />
	</fieldset>

	<fieldset>
		<label for="bio">Bio</label>
		<textarea id="bio"></textarea>
	</fieldset>
	
	<fieldset class="check">
		<label><input type="checkbox" /> I accept the terms of service and lorem ipsum.</label>
	</fieldset>

	<fieldset class="form-actions">
		<input type="submit" value="Submit" />
	</fieldset>
</form>	
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<form action="#">

<fieldset>
	<label for="nombre">Name</label>
	<input type="text" id="nombre" class="input-text" />
	<p class="form-help">This is help text under the form field.</p>
</fieldset>
	
<fieldset>
	<label for="email">Email</label>
	<input type="email" id="email" class="input-text" />
</fieldset>
	
<fieldset>
	<label for="gender">Gender</label>
	<select id="gender">
	<option>Male</option>
	<option>Female</option>
	</select>
</fieldset>

<fieldset class="radio">
	<label for="notifications">Notifications</label>
	<ul>
		<li>
			<label>
				<input type="radio" name="notifications" /> Send me email
			</label>
		</li>

		<li>
			<label>
				<input type="radio" name="notifications" /> Don't send me email
			</label>
		</li>

		<li>
			<label><input type="radio" name="notifications" /> Send me flowers
			</label>
		</li>

	</ul>
</fieldset>

<fieldset>
	<label for="url">URL
	</label>

	<input type="url" id="url" class="input-text" placeholder="http://yourdomain.com" />
</fieldset>

<fieldset>
	<label for="bio">Bio
	</label>
	
</fieldset>
	

</form>	



</textarea>
	</div>
	</div>

			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
form fieldset 
{
	margin: 0 0 10px 0;
	padding: 0 0 10px 0;
	font-size: 14px;
}


form.simpleform fieldset label 
{
	float: left;
	width: 20%;
	margin: 4px 0 5px 0;
	font-weight: bold;
}


form.simpleform fieldset input.input-text,
form.simpleform fieldset textarea 
{
	display: block;
	width: 50%;
	padding: 5px;
	font-size: 14px;
	border: 1px solid #fff;
	background: #E54D26;
	color: #fff;
	border-radius: 6px;
}


form.simpleform fieldset input.input-text:focus, 
form fieldset textarea:focus 
{
	border: 1px solid #ccc;
	background: #fff;
	color: #E54D26;
}


form fieldset p.form-help 
{
	margin: 5px 0 0 20%;
	font-size: 12px;
	color: #999;
}


form fieldset select 
{
	min-width: 25%;
	margin: 0;
}


form fieldset.radio ul
{
	margin: 5px 0 0 20%;
	/*repetido del ul general*/
	border-radius: 6px 6px 6px 6px;
    font-size: 0.9em;
    font-weight: 600;
    overflow: hidden;
    padding: 0.3em 0;
}


form fieldset.radio ul li 
{
	margin: 0 0 5px 0;
}


form.simpleform fieldset.radio ul li label 
{
	display: inline;
	float: none;
	width: auto;
	font-weight: normal;
}


form fieldset.radio ul li:last-child 
{
	margin: 0;
}


form fieldset textarea 
{
	height: 150px;
}


form.simpleform fieldset.check 
{
	padding-left: 20%;	
}


form.simpleform fieldset.check label 
{
	display: inline;
	float: none;
	width: auto;
	font-weight: normal;
}


form.simpleform input[type="submit"]
{
	margin: 0;
	padding: 5px 10px;
	font-size: 12px;	
	font-weight: bold;
	border: 1px solid #ccc;
	background: #eee;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}


form input[type="submit"]:hover,
form input[type="submit"]:focus 
{
	border: 1px solid #bbb;
	background: #e5e5e5;
}


form.simpleform input[type="submit"]:active 
{
	border: 1px solid #ccc;
	background: #eee;
}

@media screen and (max-width:565px)
{
	form.simpleform fieldset label
{
	display: block;
	width: 100%;
}
form fieldset.radio ul
{
	display: block;
	width: 100%;
	margin: 5px 0 0 0%
}
form.simpleform fieldset input.input-text, form.simpleform fieldset textarea
{
	width: 100%;
}
form.simpleform fieldset.check
{
	padding-left: 0;
}
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