<?php
include('bd.php');
?>

<style>
#label {
	position: absolute;
	top: 0px;
	left: 50px; 
	float: left;
	width: 300px;
	height: 100px;
	border: 1px solid black;
}
#tel {
	position: absolute;
	top: 10px;
	left: 360px; 
	float: left;
	width: 840;
	height: 60px;
	border: 1px solid black;
}
#menu {
	position: absolute;
	top: 110px;
	left: 50px; 
	float: left;
	width: 300px;
	height: 250px;
	border: 1px solid black;
}

#mi {
	position: absolute;
	top: 110px;
	left: 360px; 
	float: left;
	width: 840px;
	height: 600px;
	border: 1px solid black;
}

html, body {
	font: normal 12px Tahoma;
	color: #333;
}

a {
	outline: none;	
}

div#wrap {
	width: 500px;
	margin: 50px auto;	
}

img {
	border: 1px solid #CCC;
	padding: 2px;	
	margin: 10px 5px 10px 0;
	
	
}
</style>
<head>
</head>
<body>
	<div id='label'> НАСТОЯЩИЙ ДЕД МОРОЗ! </div>
	<div id='tel'> тел: 333-3-333 <br> @: ded_m@mail.ru	</div>
	<div id='menu'>
		<form action='' method='post'>
			<input type='submit' name='ok' value='О НАС'> </input>
			<input type='submit' name='ok' value='НАШИ ФОТО'> </input>
			<input type='submit' name='ok' value='ПРОГРАММЫ'>  </input> <br>
			<input type='submit' id='ok' value='ПРОГРАММЫ'>  </input> <br>
			<input type='submit' id='ok' value='ОТЗЫВЫ'>  </input> <br>
			<input type='submit' id='ok' value='ЗАКАЗ'>  </input> <br>
		</form>
	</div>

</body>

<div id='mi'>
<?php
if ( isset($_POST) && !empty($_POST)) {
	if($_POST['ok']=='О НАС'){
		include('onas.php');
		}
}
?>
</div>