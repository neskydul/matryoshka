<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="logo/matm.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



	
	
	<title>matryoshka.css</title>
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
					<div class="intro">
						<p>This is a style guide based on the ideas of <a href="http://pea.rs/">Pears</a> by Dan Cederholm, and <a href="http://bradfrostweb.com/blog/post/atomic-web-design/">Atomic design</a> by Brad Frost.</p>
						<p>You can download it from <a href="#">Github</a>.</p>
					</div>
				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<div class="intro">

	<p>
	This is a style guide based on the ideas of <a href="#">Pears</a> by Dan Cederholm, and <a href="#">Atomic design</a> by Brad Frost.
	</p>

	<p>
	You can download it from <a href="#">Github</a>.
	</p>

</div>
</textarea>
</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
.intro
{
	font-size: 2em;
	
}

.intro p
{
	line-height: 1.5em;
}

a
{
	color: #509CF3;
	font-weight: 600;
}
</textarea>
</div>			
	</div>

</div>	
	
		


	</div>
	<script src="js/jquery-1.9.1.min.js"></script>	
<script>
	$('nav ul ul').hide();
$('.slide').css('cursor', 'pointer');


$('.slide').on('click', muestraLista);

function muestraLista()
{
	$(this).find('ul').slideToggle();
}



$('nav a').on('click', accion);




function accion()
{	
	/*muestra codigos*/
	$('.html, .css').show();

	/*cambiaclases*/
	$('nav a').removeClass('activo');
	$(this).addClass('activo');

	
	
	
	

	/*cambia titulo y carga contenido*/
	url = $(this).attr('href');
	titulo= $(this).text()
	$('.loadexample').load( url + ' .loadexample');
	$('.loadhtml').load( url + ' .loadhtml');
	$('.loadcss').load( url + ' .loadcss');
	$('.example .tag').text(titulo);
	

	/*scroll facilitar movil*/
	var anchoPantalla
	anchoPantalla = $(document).width();

	if(anchoPantalla<715)
	{
		$('html, body').animate({ scrollTop: $('.example').offset().top}, 1000);
	}



	return false;
}

/*ocultar codigos en artículos*/

$('nav .hidecode a').on('click', hidecode);

function hidecode()
{
	$('.html, .css').hide();
}
</script>
</body>
</html>