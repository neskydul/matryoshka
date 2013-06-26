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

					<table>
			<tr><th>header1</th><th>header2</th><th>header2</th></tr>
			<tr><td>data1</td><td>data2</td><td>data3</td></tr>
			<tr><td>data1</td><td>data2</td><td>data3</td></tr>
			<tr><td>data1</td><td>data2</td><td>data3</td></tr>
			<tr><td>data1</td><td>data2</td><td>data3</td></tr>
		</table>


				</div>
			</div>

	<div class="html">
		<h3 class="tag">html</h3>
		<div class="loadhtml">
<textarea class="htmlarea">
<table>
	<tr>
		<th>header1</th>
		<th>header2</th>
		<th>header2</th>
	</tr>
	<tr>
		<td>data1</td>
		<td>data2</td>
		<td>data3</td>
	</tr>
	<tr>
		<td>data1</td>
		<td>data2</td>
		<td>data3</td>
	</tr>
	<tr>
		<td>data1</td>
		<td>data2</td>
		<td>data3</td>
	</tr>
	<tr>
		<td>data1</td>
		<td>data2</td>
		<td>data3</td>
	</tr>
</table>
</textarea>
	</div>
	</div>
			

				
			

	<div class="css">
		<h3 class="tag">css</h3>
		<div class="loadcss">
<textarea class="cssarea">
th, td
{
	padding: 10px 20px;
	text-align: center;
}

th
{

	background-color: #E54D26;
	color: #fff;
	text-shadow:none;
	border-bottom: none;
	border-left: 2px solid #C74012;
}

th:first-child
{
	border-radius: 6px 0 0 0;
	border-left: none;
}

th:last-child
{
	border-radius:  0 6px 0 0 ;
}

td
{
	color: #5e5e5e;
	font-size: 0.9em;
	border-left: 1px solid #fff;
	border-bottom: 1px solid #fff;
}

td:first-child
{
	border-left: none;
}

table tr:last-child th,
table tr:last-child td
 
	border-bottom: none;
}

	
tr:nth-child(even) 
{
	background: #FAF8F8;
}

tr:nth-child(odd) 
{
	background: #F3F3F3;	
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