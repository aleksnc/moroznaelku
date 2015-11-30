<?php
include('bd.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<title>НОВЫЙ ГОД С ДЕДОМ МОРОЗОМ!</title>
<meta name="title" content="ДЕД МОРОЗ ПРИДЕТ К ВАМ В ДОМ!">
<meta name="description" content="Дед мороз и Снегурка похдравят Вас и Ваших детей с наступающим или уже наступившем новым 2014 годом!!!" />
<meta name="keywords" content=" дед мороз,дед мороз на дом, дед мороз и снегурочка, дед мороз на дом в СПБ, Дед мороз Санкт-петербург, Дед мороз СПБ, Дед мороз и снегурочка СПБ" />

<style>
body{
background:url('fancybox/bar-abg.png') repeat-y;
}
#label {
	background: url('fancybox/2back_menu.png') no-repeat scroll right 5px transparent;
	position: absolute;
	left: 50px; 
	float: left;
	width: 1139px;
	height: 200px;

}

#mi {
	position: absolute;
	top: 235px;
	left: 296px; 
	float: left;
	width: 900px;
	height: 570px;

}

#menu2 {
	position: absolute;
	top: 235px;
	left: 50px; 
	float: left;
	width: 225px;
	height: 570px;

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
st{
font: italic 14px tahoma; color: #0030ab;

}

 div, fieldset, input, #dm, #elka, #call {
	margin: 0; padding: 0; border: 0;
}


#name, #tel, #koment, #fio, #otz {

	background: #ededed url(fancybox/bar-bg.png) repeat-x;
	border: 1px solid #a6c9e2;
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 3px;
	font: italic 13px tahoma; color: #000;
	outline: none; 
}	

#time{
position: absolute;
top: 400px;
left: -40px;
}


#elka {
position: absolute;
width: 120px;
top: 190px;
left: 50px;
}


#call {
position: absolute;
width: 380px;
top: 20px;
left: 750px;
}

</style>
<link rel="icon" href="6.png" type="image/x-icon">
<link rel="shortcut icon" href="6.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="fancybox/scroll.css" media="screen" />
<link rel="stylesheet" type="text/css" href="fancybox/menu.css" media="screen" />
<link href="calendar/css/start/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="calendar/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="fancybox/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#scrollbar1').tinyscrollbar();	
	$('#scrollbar2').tinyscrollbar();	
});
$(function() {
	var availableTags = [];
	$( "#autocomplete" ).autocomplete({
		source: availableTags
	});		
	$( "#button" ).button();
});
</script>

 </head>
 <body>
<div id="menu2">
<?php
include('calendar/date.html');
include('timer/time.html');
?>
<img id='elka' src='fancybox/e.gif'></img>
</div>
<div id="label">
<img id='call' src='fancybox/call.png'>
<div class="container">
            <ul id="nav">
                <li><a class="hsubs" href="#"><font size='3'><b>Главная</b></font></a>
                    <ul class="subs">
                        <li><a href="index.php">О НАС</a></li>
                        <li><a href="foto.php">ФОТО</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#"><font size='3'><b>Прогаммы</b></font></a>
                    <ul class="subs">
                        <li><a href="prog1.php">ДОМА</a></li>
                        <li><a href="prog2.php">УЧЕБНЫЕ ЗАВЕДЕНИЯ</a></li>
                        <li><a href="prog3.php">КОРПОРАТИВЫ</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#"><font size='3'><b>Цены</b></font></a>
                    <ul class="subs">
                        <li><a href="prise1.php">ДОМА</a></li>
                        <li><a href="prise2.php">УЧЕБНЫЕ ЗАВЕДЕНИЯ</a></li>
                        <li><a href="prise3.php">КОРПОРАТИВЫ</a></li>
                    </ul>
                <li><a href="otziv.php"><font size='3'><b>Отзывы</b></font></a></li>
                <li><a href="zakaz.php"><font size='3'><b>Пригласить</b></font></a></li>
                <div id="lavalamp"></div>
            </ul>
</div>
</div>
<body>
</html>