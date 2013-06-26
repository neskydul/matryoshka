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
				<h2>Underlined wish</h2>
				<time>Posted Jun 21, 2013</time>
			</header>
			
				<img class="thumb" src="img/underlinedwish.jpg" alt="">
				

				<p>While doing this proyect I´ve noticed that there are some css rules that I would ask to be a little bit easyer, that´s what happened to me with text-decoration: underlined.</p> 

<p>Why can´t we change the color only for the underline? I mean, I want my text color to be #000 but i want the underline to be #f00. I´ve seen many ways to fix that, like adding a border-bottom, a :before with a line, and some other ways i can´t remember right now. The problem comes when I have a text underlined and an icon as font :before that text, that before turns up underlined even if I tell that :before text-decoration:none. For example that what happens to me in the proyect with the ins tag. </p>

			
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