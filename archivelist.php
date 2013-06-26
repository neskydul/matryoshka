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
					
		<div class="archivelist">
			<ol>
				<li>julio 2013</li>
					<ol>
						<li>Title of article 1</li>
						<li>Title of article 2</li>
						<li>Title of article 3</li>
					</ol>
				<li>mayo 2013</li>
				<li>abril 2013</li>
				<li>marzo 2013</li>
				<li>febrero 2013</li>
			</ol>
		</div>
				
			
	
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="archivelist">
	<ol>
		<li>julio 2013</li>
			<ol>
				<li>Title of article 1</li>
				<li>Title of article 2</li>
				<li>Title of article 3</li>
			</ol>
		<li>mayo 2013</li>
		<li>abril 2013</li>
		<li>marzo 2013</li>
		<li>febrero 2013</li>
	</ol>
</div>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.archivelist ol 
{
    font-size: 0.9em;
    font-weight: 600;
    padding: 0.3em 0;
}


.archivelist ol li:before 
{
    background-color: transparent;
    border-radius: 2px 2px 2px 2px;
    color: #E54D26;
    content: "\e800";
    display: inline-block;
    font-family: 'fontello';
    font-size: 0.7em;
    margin: 0 2px 0 0;
    text-shadow: none;
}


.archivelist ol li 
{
    padding: 0.5em 0;
}


.archivelist ol ol 
{
    color: #5E5E5E;
    font-weight: normal;
    margin-left: 20px;
}


.archivelist ol ol li:before 
{
    background-color: transparent;
    color: #FA5F37;
    content: "";
    display: inline-block;
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