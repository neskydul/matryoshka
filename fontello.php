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
				<h2>Fontello</h2>
				<time>Posted Jun 20, 2013</time>
			</header>
			<img class="medium" src="img/fontello.png" alt="">
			<p>Now a days there are a lots of screen sizes and also screen resolutions.</p>
<p>There is a big issue trying to show images for high resolution displays, for standard background pictures we have a speciall media query: @media screen and (-webkit-min-device-pixel-ratio : 1.5), screen and (min-device-pixel-ratio : 1.5) but there are other pictures that can not be displayed as background, for example the icons to show before a lists or some titles.</p><p>For this particular case fontello is a great solution.</p>
<p>Once you chose the icons you want, fontello will make a font with them so that you can use those icons in :before.</p> <p>You´ll download a .zip file with the font and the instructions with the necesary code to use it.</p>
<p><a href="http://fontello.com/">Go to fontello and have a look!</a></p>

			
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