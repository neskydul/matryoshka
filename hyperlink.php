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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, fugiat, quam, veniam tempora ex <a href="#">necessitatibus deleniti</a> tenetur non velit maxime voluptatum esse? Ratione dolores cumque praesentium amet omnis sequi ipsa.</p>

				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, fugiat, quam, veniam tempora ex <a href="#">necessitatibus deleniti</a> tenetur non velit maxime voluptatum esse? Ratione dolores cumque praesentium amet omnis sequi ipsa.</p>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
p
{
	font-size: 0.9em;
	line-height: 1.2em;
	padding: 0 0 0.3em 0;

}

a
{
	color: #509CF3;
	font-weight: 600;
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