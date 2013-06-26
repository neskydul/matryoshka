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
					<aside>
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

				
					

					
					
					</aside>

				
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<aside>
	<ul>
		<h3>Nav title</h3>
		<li class="textb slide">Item 1
			<ul>
				<li><a href="#">Subitem 1</a></li>
				<li><a href="#">Subitem 2</a></li>
			</ul>

		</li>

		<li class="list slide">Item 2
			<ul>
				<li><a href="#">Subitem 1</a></li>
				<li><a href="#">subitem 2</a></li>
			</ul>

		</li>
	</ul>
</aside>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
aside
{
    background-color: #FFFFFF;
    border-radius: 6px 6px 6px 6px;
    float: left;
    margin-right: 2%;
    max-width: 200px;
    padding: 0.5em 2%;
    width: 20%;
}


ul
{
    border-radius: 6px 6px 6px 6px;
    font-size: 0.9em;
    font-weight: 600;
    overflow: hidden;
    padding: 0.3em 0;
}


h3 
{
    font-size: 1.5em;
    padding: 0.4em 0;
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

</textarea>
		</div>			
	</div>

</div>	
	
		


	</div>
	<script src="js/jquery-1.9.1.min.js"></script>	
<script src="js/app.js"></script>
</body>
</html>