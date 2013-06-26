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
				<div class="col4">
					
					
						<div class='excerpt latest'>
						<header>
							<h3>The Title</h3>
							<time>Posted August 22, 2011</time>
						</header>
				
						<img class="thumb" src="img/picture.jpg" alt="">
						

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
						<a href="#" class="readmore">read more</a>		
					</div>

				</div>
				<div class="col4">
					
					
						<div class='excerpt latest'>
						<header>
							<h3>The Title</h3>
							<time>Posted August 22, 2011</time>
						</header>
				
						<img class="thumb" src="img/picture.jpg" alt="">
						

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
						<a href="#" class="readmore">read more</a>		
					</div>

				</div>




				<div class="col4">
					
					
						<div class='excerpt latest'>
						<header>
							<h3>The Title</h3>
							<time>Posted August 22, 2011</time>
						</header>
				
						<img class="thumb" src="img/picture.jpg" alt="">
						

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
						<a href="#" class="readmore">read more</a>		
					</div>

				</div>

				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="col4">
	<div class='excerpt latest'>
		<header>
			<h3>The Title</h3>
			<time>Posted August 22, 2011</time>
		</header>
				
		<img class="thumb" src="img/picture.jpg" alt="">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
		<a href="#" class="readmore">read more</a>		
	</div>

</div>

<div class="col4">
	<div class='excerpt latest'>
		<header>
			<h3>The Title</h3>
			<time>Posted August 22, 2011</time>
		</header>
				
		<img class="thumb" src="img/picture.jpg" alt="">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
		<a href="#" class="readmore">read more</a>		
	</div>
</div>

<div class="col4">
	<div class='excerpt latest'>
		<header>
			<h3>The Title</h3>
				<time>Posted August 22, 2011</time>
		</header>

		<img class="thumb" src="img/picture.jpg" alt="">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
		<a href="#" class="readmore">read more</a>		
	</div>

</div>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.col4
{
	width: 31.25%;
	margin: 0 1.04167%;
	float: left;
}
.excerpt header
{
	margin-bottom: 0.6em;
}

.excerpt h3
{
	padding-bottom: 0.1em;
	font-size: 1.5em;
}

time:before
{
	content: '\e800';
	font-family: 'fontello';
	display: inline-block;
	margin:0 2px 0 0px;
	font-size: 0.7em;
}

.excerpt time
{
	font-size: 0.8em;
	color: #E54D26;
}
.excerpt .thumb
{
	width: 77px;
	float: left;
    margin: 0 1em 1em 0;
}

p 
{
    font-size: 0.9em;
    line-height: 1.2em;
    padding: 0 0 0.3em;
}

.readmore
{
	font-size: 0.8em;
	color: #E54D26;
    font-weight: 600;
}


@media screen and (max-width:565px)
{
	.latest
{
	border-bottom: #E54D26 1px solid;
	padding-bottom: 1em;
	margin-bottom: 2em;
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