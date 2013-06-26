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
			<article>
			<header>
				<h2>media query wish</h2>
				<time>Posted Jun 20, 2013</time>
			</header>
			
				
				

				<p>Sometimes we do not need to reorder or resize content depending on the screen, sometimes we need to do some stuff depending on it´s container. Well, that´s 	
exactly what has happened to me in this project. </p><p>I have two colums, the aside tag on the left and the div.container on the right, all the examples are in the div.example tag inside div.container tag and I wanted to change it´s CSS depending on the div.container´s size... </p><p>I´ve been googling and, what a surprise, I was not able to do it. I get that responsive design (adaptative or whatever you want it to be called), has just started but I feel this option as a need to develop websites in the future and now.</p>

<p>I started with css and html about 9 months ago and I can feel the needs to develop websites for diferent screen sizes, I guess it´s all about time and hard working.</p>

			
		</article>
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h4>Heading 3</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
h1
{
	font-size: 2.3em;
	padding: 0.6em 0;
}

h2
{
	font-size: 2em;
	padding: 0.1em 0;
}

h3
{
	font-size: 1.5em;
	padding: 0.4em 0;
}

h4
{
	font-size: 1.3em;
	padding: 0.3em 0;
}

h5
{
	font-size: 1em;
	padding: 0.2em 0;
}

h6
{
	font-size: 0.7em;
	padding: 0.2em 0;
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