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
					<div class="ol">
					<ol>
				<li>Item 1</li>
					<ol>
						<li>Sub-Item 1</li>
						<li>Sub-Item 2</li>
						<li>Sub-Item 3</li>
					</ol>
				<li>Item 2</li>
				<li>Item 3</li>
				<li>Item 4</li>
				<li>Item 5</li>
			</ol>
		</div>

				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<ol>
	<li>Item 1</li>
		<ol>
			<li>Sub-Item 1</li>
			<li>Sub-Item 2</li>
			<li>Sub-Item 3</li>
		</ol>
	<li>Item 2</li>
	<li>Item 3</li>
	<li>Item 4</li>
	<li>Item 5</li>
</ol>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
ol 
{
	counter-reset:li;
	font-size: 0.9em;
	padding: 0.3em 0;
	font-weight: 600;
   
}

ol ol 
{
	
	margin-left: 20px;
	color: #5e5e5e;
	font-weight: normal;
}

ol li
{
	padding: 0.5em 0;
}


ol ol li
{
	padding: 0.2em 0;
}

ol li:before {
   content:counter(li)''; 
   counter-increment:li; 
   display: inline-block;
   margin-right: 5px;    
   color:#fff;
   background-color: #FA5F37;
   line-height: 6px;
   padding: 6px;
   text-shadow:none;
   border-radius: 2px;
      
}
ol ol li:before {
    content:counter(li)'.'; 
    counter-increment:li; 
    display: inline-block;  
    color:#FA5F37;
    background-color: transparent;
   
      
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