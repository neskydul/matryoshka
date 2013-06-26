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
					<div class="profile">



			<div class="col7">
				<div class="row">
					<div class="profileimg">
						<img src="img/picture.jpg" alt="">
					</div>
					<div class="data">
						<h2>Ana Pujana Jiménez</h2>
						<address>
							<a href="mailto:anapujanajimenez@gmail.com">anapujanajimenez@gmail.com</a>
							<time>26 July 1986</time>
							<p>Santander / Spain</p>
						</address>
					</div>
				</div>


				<div class="row">
					<div class="aboutme">
						<h3>About me</h3>
						<dl>
							<dt>Skills</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
							<dt>Education</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
							<dt>Work</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
						</dl>
					</div>
				</div>
			</div>

			<div class="col5">
				<figure>
					<img src="img/picture.jpg" alt="">
					<figcaption>Work nº1</figcaption>
				</figure>
				<figure>
					<img src="img/picture.jpg" alt="">
					<figcaption>Work nº1</figcaption>
				</figure>
				<figure>
					<img src="img/picture.jpg" alt="">
					<figcaption>Work nº1</figcaption>
				</figure>
				<figure>
			<img src="img/picture.jpg" alt="">
			<figcaption>Work nº1</figcaption>
		</figure>
				
			</div>





		</div>
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="profile">

	<div class="col7">
		<div class="row">
			<div class="profileimg">
				<img src="img/picture.jpg" alt="">
			</div>
			
			<div class="data">
				<h2>Ana Pujana Jiménez</h2>
				<address>
					<a href="mailto:anapujanajimenez@gmail.com">anapujanajimenez@gmail.com</a>
					<time>26 July 1986</time>
					<p>Santander / Spain</p>
				</address>
			</div>
		</div>


		<div class="row">
			<div class="aboutme">
				<h3>About me</h3>
				<dl>
					<dt>Skills</dt>
					<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
					<dt>Education</dt>
					<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
					<dt>Work</dt>
					<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, id, unde quae minima dicta non vero facilis voluptas veritatis consequatur labore maxime aliquid cupiditate sunt commodi enim veniam hic fugit?</dd>
				</dl>
			</div>
		</div>
	</div>


	<div class="col5">
		<figure>
			<img src="img/picture.jpg" alt="">
			<figcaption>Work nº1</figcaption>
		</figure>
		
		<figure>
			<img src="img/picture.jpg" alt="">
			<figcaption>Work nº1</figcaption>
		</figure>
		
		<figure>
			<img src="img/picture.jpg" alt="">
			<figcaption>Work nº1</figcaption>
		</figure>

		<figure>
			<img src="img/picture.jpg" alt="">
			<figcaption>Work nº1</figcaption>
		</figure>
				
	</div>

</div>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.profile .col7
{
    border: 2px solid #DDDDDD;
    float: left;
    height: 500px;
    margin: 0 1.04167%;
    overflow: auto;
    padding: 4%;
    width: 52.25%;
}


.profile .row 
{
    clear: both;
    margin-bottom: 1em;
    overflow: hidden;
}


.profileimg 
{
    margin-right: 6%;
    max-width: 150px;
    float: left;
}


.profile img 
{
    width: 100%;
}



.profile h2 
{
    font-size: 1.5em;
    margin-bottom: 0.4em;
    padding: 0.1em 0;
}


.profile address a 
{
    display: block;
    font-size: 0.9em;
    margin-bottom: 0.5em;
    text-decoration: none;
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


.profile time 
{
    display: block;
    font-size: 0.9em;
    margin-bottom: 0.3em;
    color: #E54D26;
}


p 
{
    font-size: 0.9em;
    line-height: 1.2em;
    padding: 0 0 0.3em;
}


.profile h3 
{
    color: #E54D26;
    font-size: 1.1em;
    font-weight: bold;
    margin-bottom: 1em;
    padding: 0.4em 0;
}


.profile dl 
{
    margin-left: 1em;
}


dl 
{
    font-size: 0.9em;
    font-weight: 600;
    padding: 0.3em 0;
}


.profile dt:before 
{
    content: none;
}


dd 
{
    color: #5E5E5E;
    font-size: 0.9em;
    font-weight: normal;
    margin-bottom: 20px;
    margin-left: 20px;
    padding: 0.2em 0 0.5em;
}


.profile .col5 
{
    border: 2px solid #DDDDDD;
    float: left;
    height: 500px;
    margin: 0 1.04167%;
    overflow: auto;
    padding: 4%;
    width: 25.5833%;
}


.profile figure 
{
    margin-bottom: 2em;
    text-align: center;
}


.profile img 
{
    width: 100%;
}


.profile figcaption 
{
    color: #E54D26;
    font-weight: 600;
    margin-top: 0.5em;
}

@media screen and (max-width:1164px)/*profile*/
{

	.profile .col7, .profile .col5
	{
		width: 90%;
		display: block;

	}
	.profile figure
	{
		max-width: 47%;
		float: left;
		margin-left: 2em;
		margin-bottom: 3em;
		overflow: hidden;


	}
	.profile figure:nth-child(odd)
	{
		
		margin-left: 0;

	}



	.profile .col5, 
	{
		height: auto;
		overflow: hidden;
		text-align: center;

	}

	.profile .col7
	{
		height: auto;
	}

}



@media screen and (max-width:972px)
{
	.profile figure
	{
		max-width: 300px;
		
		margin: 0 auto;
		display: block;
		float: none;
		margin-bottom: 2em;

	}

	
	.profile figure:nth-child(odd)
	{
		
		margin-left: auto;

	}
}


@media screen and (max-width:531px)
{
	.data
	{
		width: 100%;
		display: block;
		float: none;
		text-align: center;
		border-bottom: 1px solid #E54D26;
	}
	.profileimg
	{
		max-width: 200px;
		margin: 0 auto;
		float: none;
		margin-bottom: 1em;
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