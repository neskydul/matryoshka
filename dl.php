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

					<dl>
						<dt>Definition Term 1</dt>	
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio architecto commodi temporibus perspiciatis minima? Quae possimus unde mollitia consequatur dolor quia voluptatibus deserunt voluptates. Laudantium repudiandae repellendus harum quis ea!</dd>

						<dt>Definition Term 2</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officia, reiciendis, deserunt, quas est suscipit eos autem porro mollitia ut tenetur iure explicabo doloremque distinctio non quam debitis perferendis accusamus.</dd>

						<dt>Definition Term 3</dt>	
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quidem, ipsam nisi ullam unde delectus consequuntur deserunt quis eius natus eligendi quam dicta excepturi eos at sapiente repellendus ducimus iste.</dd>

						<dt>Definition Term 4</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, magnam, nesciunt, omnis dolorem laudantium eum tempore expedita obcaecati molestiae et labore amet deserunt! Magnam, voluptatibus temporibus laboriosam modi maiores aliquid?</dd>	
					</dl>


				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<dl>
	<dt>Definition Term 1</dt>	
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio architecto commodi temporibus perspiciatis minima? Quae possimus unde mollitia consequatur dolor quia voluptatibus deserunt voluptates. Laudantium repudiandae repellendus harum quis ea!</dd>

	<dt>Definition Term 2</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officia, reiciendis, deserunt, quas est suscipit eos autem porro mollitia ut tenetur iure explicabo doloremque distinctio non quam debitis perferendis accusamus.</dd>

	<dt>Definition Term 3</dt>	
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quidem, ipsam nisi ullam unde delectus consequuntur deserunt quis eius natus eligendi quam dicta excepturi eos at sapiente repellendus ducimus iste.</dd>

	<dt>Definition Term 4</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, magnam, nesciunt, omnis dolorem laudantium eum tempore expedita obcaecati molestiae et labore amet deserunt! Magnam, voluptatibus temporibus laboriosam modi maiores aliquid?</dd>	
</dl>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
dl
{
	font-size: 0.9em;
	padding: 0.3em 0;
	font-weight: 600;
}



dt
{
	padding: 0.2em 0 0 0;
	margin-bottom: 5px;


}

dt:before
{
	content: "\e802";
	font-family: 'fontello';
	margin-right: 5px;
	font-size:1em;
	color: #FA5F37;
}

dd
{
	padding:  0.2em  0 0.5em 0;
	margin-left: 20px;
	color: #5e5e5e;
	font-weight: normal;
	margin-bottom: 20px;
	font-size: 0.9em;
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