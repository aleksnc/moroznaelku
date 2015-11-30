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
	height: 570px;
	border: 1px solid black;
}

#ot {
	position: absolute;
	top: 310px;
	z-index: 6;
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
<link rel="stylesheet" type="text/css" href="fancybox/scroll.css" media="screen" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
		});
</script>

<body>
	<div id='label'> НАСТОЯЩИЙ ДЕД МОРОЗ! </div>
	<div id='tel'> тел: 333-3-333 <br> @: ded_m@mail.ru	</div>
	<div id='menu'>
		<form action='' method='post'>
			<input type='submit' name='ok' value='О НАС'> </input> <br>
			<input type='submit' name='ok' value='НАШИ ФОТО'> </input> <br>
			<input type='submit' name='ok' value='ПРОГРАММЫ'>  </input> <br>
			<input type='submit' name='ok' value='ЗАКАЗ'>  </input> <br>
			<input type='submit' name='ok' value='ОТЗЫВЫ'>  </input> <br>
			
		</form>
	</div>
</body>
<div id="mi">
<?php
	if($_POST['ok']=='НАШИ ФОТО'){$inc='foto.php';} elseif($_POST['ok']=='ПРОГРАММЫ'){$inc='prog.php';}
		elseif($_POST['ok']=='ЗАКАЗ'){ $inc='zakaz.php';}
		elseif($_POST['ok']=='ОТЗЫВЫ'){ 
			$inc='otziv.php';
		} elseif($_POST['ok']=='О НАС') {
 $inc='onas.php';
} else {	$inc='in.php';}
 ?>
	<div id="scrollbar1">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
			 <div class="overview">
		 
		 	<?php
	include $inc;
	?>
		 
		</div>
	</div>
</div>


</div>