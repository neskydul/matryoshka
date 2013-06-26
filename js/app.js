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


