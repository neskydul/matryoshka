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

			<div class="example">
				<h3 class="tag">example</h3>
				<div class="loadexample">
					<div class="chat">

			<div class="header">
				<div class="el persons">
				<figure>
					<img src="img/picture.jpg" alt="">
					<figcaption>Héctor F Díaz</figcaption>
				</figure>
				</div>

				<div class="yo persons">
					<figure>
						<img src="img/picture.jpg" alt="">
						<figcaption>Ana Pujana</figcaption>
					</figure>
				</div>
			</div>
			<ol>
				<li><p>hi there!</p></li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, perferendis, debitis nulla doloremque totam ut dolorum vero quidem eum molestiae veniam ipsam tempore laudantium quod tenetur? Facere, minima cum neque?</li>
				<li>tuyo</li>
				<li>mio</li>
				<li>tuyo</li>
			</ol>
			<div class="textareabox">
				<textarea>
					
				</textarea>
			</div>
		</div>
				</div>

			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="chat">
	<div class="header">
		<div class="el persons">
			<figure>
				<img src="img/picture.jpg" alt="">
				<figcaption>Héctor F Díaz</figcaption>
			</figure>
		</div>

		<div class="yo persons">
			<figure>
				<img src="img/picture.jpg" alt="">
				<figcaption>Ana Pujana</figcaption>
			</figure>
		</div>
	</div>

	<ol>
		<li><p>hi there!</p></li>
		<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, perferendis, debitis nulla doloremque totam ut dolorum vero quidem eum molestiae veniam ipsam tempore laudantium quod tenetur? Facere, minima cum neque?</p></li>
		<li><p>tuyo</p></li>
		<li><p>mio</p></li>
		<li><p>tuyo</p></li>
	</ol>
	<div class="textareabox">
		
	</div>
</div>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.chat
{
	max-width: 500px;
	border: 2px solid #eee;
	overflow: hidden;
	border-radius: 6px;
	margin: 0 auto;


}

.chat ol {
    counter-reset:li; 
    font-size: 0.9em;
	padding: 1em 0;
	font-weight: 400;
	line-height: 1.3em;
   
}

.chat ol ol 
{
	
	margin-left: 20px;
	color: #5e5e5e;
	font-weight: normal;
}

.chat ol li
{
	padding: 0.5em 0;
	border-radius: 6px;
	padding: 1em;
	margin: 0.5em 0;
	display: inline-block;

}





.chat ol ol li:before {
    content:''; 
   
    display: inline-block;
     
    color:#FA5F37;
    background-color: transparent;
   
      
}

.chat ol li:nth-child(even) 
{
	
	text-align: right;
	float: right;
	width: 60%;
	position: relative;
  background-color:#FACCC0;
  margin-right: 20px;
  
  
  text-align:center;
  
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  -webkit-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  -moz-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  box-shadow: 0px 0 3px rgba(0,0,0,0.25); 

}
.chat ol li:nth-child(odd) 
{
	position: relative;
  background-color:#eee;
   margin-left: 20px;
 
  
  text-align:center;
  
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  -webkit-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  -moz-box-shadow: 0px 0 3px rgba(0,0,0,0.25);
  box-shadow: 0px 0 3px rgba(0,0,0,0.25); 
	width: 50%;
	float: left;
	
}
.chat ol li:nth-child(odd):before
{
	position: absolute;
 	display: block;
  	content: ""; 
  	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;

	
	border-right:9px solid #eee; 
 
 
  height:0;
  width:0;
  position:absolute;
  top: 5px;
  left:-9px;
	
}

.chat ol li:nth-child(even):before
{
	position: absolute;
 	display: block;
  	content: ""; 
  	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;

	
	border-left:9px solid #FACCC0; 
 
 
  height:0;
  width:0;
  position:absolute;
  top: 5px;
  right:-8px;
	
}




.chat .header
{
	
	background-color: #E54D26;
	padding: 0.5em;

	overflow: hidden;
}


.chat .persons img
{
	max-width: 60px;
}
.chat .el
{
	float: left;
}

.chat .yo
{
	float: right;
}
.chat .yo figcaption
{
	float: right;
	display: inline-block;
	margin-right: 1em;
	margin-top: 40px;
}
.chat .el figcaption
{
	float: left;
	display: inline-block;
	margin-left: 1em;
	margin-top: 40px;
}
.chat .yo img
{
	float: right;
}
.chat .el img
{
	float: left;
}
.chat figcaption
{
	text-shadow:none;
	color: #fff;
	font-size: 0.9em;
}
.textareabox textarea
{
	clear: both;
	float: left;
	width: 99%;
	display:inline-block;
	text-align: left!important;
	padding: 1%;
	font-family: 'Open Sans';
	font-size: 0.9em;
}

@media screen and (max-width:425px)
{
	.chat .persons
	{
		width: 48%;
	}

	.chat .el img
	{
		display: block;
	}
	.chat .yo img
	{
		display: block;
	}

	.chat .el figcaption, .chat .yo figcaption
	{
		margin-top: 10px;
		margin-left: 0;
		margin-right: 0;
		display: block;
		width: 100%;
	}

	.chat .yo figcaption
	{
		text-align: right;
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