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
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, labore, repellat, sit explicabo suscipit autem nesciunt nostrum reprehenderit et eos aspernatur dicta deleniti ipsum est accusantium magni doloremque. Adipisci, molestiae!</p>
					<q>Lorem ipsum dolor sit amet</q>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, deserunt, animi, consequuntur hic ratione quae doloribus illo accusantium enim aliquid quo dicta eveniet debitis. Facere, possimus aut dolor laudantium temporibus.</p>

				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, labore, repellat, sit explicabo suscipit autem nesciunt nostrum reprehenderit et eos aspernatur dicta deleniti ipsum est accusantium magni doloremque. Adipisci, molestiae!</p>

<q>Lorem ipsum dolor sit amet</q>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, deserunt, animi, consequuntur hic ratione quae doloribus illo accusantium enim aliquid quo dicta eveniet debitis. Facere, possimus aut dolor laudantium temporibus.</p>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
q
{
	font-style: italic;
	font-weight: 600;
	padding: 1.5em 0;
	display: inline-block;
	text-align: center;
	width: 100%;
	color: #C30017;
	font-size: 1.5em;
	
}

q:before
{
	content: '"'
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