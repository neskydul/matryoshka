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
					<div class="postlist">
						<dl>
								<dt><a href="#">Title of Article 1</a><time>26 julio 2013</time></dt>	
									<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio architecto commodi tempo</dd>

								<dt><a href="#">Title of Article 2</a><time>26 julio 2013</time></dt>
									<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officia, reic.</dd>

								<dt><a href="#">Title of Article 3</a><time>26 julio 2013</time></dt>	
									<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qu</dd>

								<dt><a href="#">Title of Article 4</a><time>26 julio 2013</time></dt>
									<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, magnam, nesciunt, </dd>	
							</dl>
					</div>
				




				

				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="postlist">
	<dl>
		<dt><a href="#">Title of Article 1</a><time>26 julio 2013</time></dt>	
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio architecto commodi tempo</dd>

		<dt><a href="#">Title of Article 2</a><time>26 julio 2013</time></dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officia, reic.</dd>

		<dt><a href="#">Title of Article 3</a><time>26 julio 2013</time></dt>	
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qu</dd>

		<dt><a href="#">Title of Article 4</a><time>26 julio 2013</time></dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, magnam, nesciunt, </dd>	
	</dl>
</div>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
dl {
    font-size: 0.9em;
    font-weight: 600;
    padding: 0.3em 0;
}
dt:before
{
	content: "\e802";
	font-family: 'fontello';
	margin-right: 5px;
	font-size:1em;
	color: #FA5F37;
}
dt {
    margin-bottom: 5px;
    padding: 0.2em 0 0;
}
a {
    color: #E54D26;
    font-weight: 600;
}
time:before
{
	content: '\e800';
	font-family: 'fontello';
	display: inline-block;
	margin:0 2px 0 0px;
	font-size: 0.7em;
}

.postlist time {
    color: #5E5E5E;
    font-size: 0.76em;
    font-weight: 400;
    margin-left: 0.5em;
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