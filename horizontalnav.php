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

					<nav class="horizontalnav">
					
						<ul>
					<h3>Nav title</h3>
					<li class="slide">Item 1
						<ul>
							<li><a href="#">Subitem 1</a></li>
							<li><a href="#">Subitem 2</a></li>
							
							
						</ul>

					</li>
					<li class="slide">Item 2
						<ul>
							<li><a href="#">Subitem 1</a></li>
							<li><a href="#">subitem 2</a></li>
							
						</ul>

					</li>
				</ul>
					
					


				</nav>
					

					
					

				
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<h1>Heading 1</h1>
<nav class="horizontalnav">
	<ul>
		<h3>Nav title</h3>
		<li class="slide">Item 1
			<ul>
				<li><a href="#">Subitem 1</a></li>
				<li><a href="#">Subitem 2</a></li>
			</ul>
		</li>
		
		<li class="slide">Item 2
			<ul>
				<li><a href="#">Subitem 1</a></li>
				<li><a href="#">subitem 2</a></li>
			</ul>
		</li>
	</ul>
</nav>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
ul 
{
    border-radius: 6px 6px 6px 6px;
    font-size: 0.9em;
    font-weight: 600;
    overflow: hidden;
    padding: 0.3em 0;
}


.horizontalnav ul h3 
{
    border-bottom: 2px solid #E54D26;
    padding-top: 0;
    font-size: 1.5em;
}


.horizontalnav  .slide
{
		
	display: inline-block;
	padding-bottom: 1em;
	width: 23.4%;
}


ul ul 
{
    color: #5E5E5E;
    font-weight: normal;
    margin-bottom: 2em;
    margin-top: 1em;
    text-indent: 20px;
}


ul ul li 
{
    line-height: 2em;
    padding: 0.2em 0 0.4em;
}


ul ul li:first-child
{
	border-radius: 6px 6px 0 0;
	overflow: hidden;
}


ul ul li:last-child
{
	border-radius:0 0 6px 6px ;
	overflow: hidden;
}


ul ul li:nth-child(even) 
{
	background: #FAF8F8;
}


ul ul li:nth-child(odd) 
{
	background: #F3F3F3;	
}


li a 
{
    display: block;
    text-decoration: none;
}


a 
{
    color: #E54D26;
    font-weight: 600;
}

@media screen and (max-width:565px)
{
	.horizontalnav .slide

	{
		float: none;
		width: 100%;

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