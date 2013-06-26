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
				<h2>The Title</h2>
				<time>Posted August 22, 2011</time>
			</header>
			
				<img class="thumb" src="img/picture.jpg" alt="">
				

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dignissimos, odio quod illum pariatur rem natus <a href="#">doloribus sed</a> minima debitis. Delectus, neque eum ut aspernatur porro libero quam laborum asperiores. illum pariatur rem natus doloribus sed minima debitis. Delectus, neque eum ut aspernatur porro libero quam laborum asperiores.</p>
				<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, eveniet</q>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, maiores nulla voluptas nihil totam vel soluta placeat labore assumenda eligendi ut sunt sed optio a commodi eos quos. Rem, saepe.</p>

			
		</article>
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<article>
	<header>
		<h2>The Title</h2>
		<time>Posted August 22, 2011</time>
	</header>
			
	<img class="thumb" src="img/picture.jpg" alt="">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, esse, quidem, magnam repellendus quia nobis adipisci cumque dicta minima aliquam dolores totam omnis asperiores autem labore debitis voluptate vitae repellat.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dignissimos, odio quod illum pariatur rem natus <a href="#">doloribus sed</a> minima debitis. Delectus, neque eum ut aspernatur porro libero quam laborum asperiores. illum pariatur rem natus doloribus sed minima debitis. Delectus, neque eum ut aspernatur porro libero quam laborum asperiores.</p>
	<q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, eveniet</q>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, maiores nulla voluptas nihil totam vel soluta placeat labore assumenda eligendi ut sunt sed optio a commodi eos quos. Rem, saepe.</p>
</article>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
article header
{
	margin-bottom: 2em;
	border-bottom: 2px solid #5e5e5e;
	padding-bottom: 1em;
}


h2 
{
    font-size: 2em;
    padding: 0.1em 0;
}


time:before
{
	content: '\e800';
	font-family: 'fontello';
	display: inline-block;
	margin:0 2px 0 0px;
	font-size: 0.7em;
}


time 
{
    color: #E54D26;
    font-size: 1em;
}


.thumb
{
	float: left;
	width: 100px;
	margin: 0 1em 1em 0em;	
}


article p 
{
	margin: 0 0 0.5em 0;
	font-size: 14px;
	line-height: 1.5;
	color: #666;
	padding: 0 0 0.3em;/*REPETIDO*/
}


q:before 
{
    content: "\"";
}


q:after 
{
    content: "\"";
}


q 
{
    color: #C30017;
    display: inline-block;
    font-size: 1.5em;
    font-style: italic;
    font-weight: 600;
    padding: 1.5em 0;
    text-align: center;
    width: 100%;
}


article body
{
	margin-top: 1em;
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