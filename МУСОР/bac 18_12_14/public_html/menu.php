<?php
include('fancybox/bd.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="geo.region" content="RU-город Санкт-Петербург" />
<meta name="keywords" content=" дед мороз,дед мороз на дом, дед мороз и снегурочка, дед мороз на дом в СПБ, Дед мороз Санкт-петербург, Дед мороз СПБ, Дед мороз и снегурочка СПБ" />

<style>
body{
background:url('fancybox/bar-abg.png') repeat-y;
margin:0;

}
#label {
	background: url('fancybox/back_menu.png') no-repeat scroll right 5px transparent;
	position: relative;
	margin:0 auto;
	width: 1139px;
	height: 200px;
}

#mi {
	position: relative;
	overflow: auto;
	float: left;
	width: 880px;
	height: 670px;
	padding:0 10;

}

#menu2 {
	position: relative;
	float: left;
	width: 225px;
	height: 670px;

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
h1 {
font-size:16;

	}
st{
font: italic 14px tahoma; color: #0030ab;

}

pc{
font: bold 14px tahoma; 
color: blue;
text-indent: 25px;
align: justify;
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
top: 420px;
left: -40px;
}


#elka {
position: absolute;
width: 120px;
top: 210px;
left: 50px;
}


#call {
position: absolute;
width: 380px;
top: 20px;
left: 750px;
}

#niz {
position: relative;
/*background: url('fancybox/domiki.png') repeat;
background-size: 250;*/
width: 1139px;
height: 68;
margin: 0 auto;
}
#metrik {
position: relative;
width: 100;
height: 25;
float: right;
}

#body{
position: relative;
margin:0 auto;
width: 1139px;
height: 650;
}
/*
#busi{
background: url('fancybox/sneg.png') repeat;
}
*/
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
	$( "ver" ).button();
});
</script>

 </head>
 <body>
 <div id='busi'>
 <div>
<div id="label">
<img id='call' src='fancybox/call.png' alt="e-mail: moroznaelku@mail.ru	Тел: +7(812)909-96-09" title="e-mail: moroznaelku@mail.ru	Тел: +7(812)909-96-09">
<div class="container">
            <ul id="nav">
                <li><a class="hsubs" href="index.php"><font size='3'><b>Главная</b></font></a>
                    <ul class="subs">
                        <li><a href="onas.php">О НАС</a></li>
                        <li><a href="foto.php">ФОТО</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="in.php"><font size='3'><b>Программы</b></font></a>
                    <ul class="subs">
                        <li><a href="prog1.php">ДОМА</a></li>
                        <li><a href="prog2.php">УТРЕННИКИ</a></li>
                        <li><a href="prog3.php">КОРПОРАТИВЫ</a></li>
                    </ul>
                </li>
                    <li><a class="hsubs" href="#"><font size='3'><b>Цены</b></font></a>
                    <ul class="subs">
                        <li><a href="prise1.php">ДОМА</a></li>
                        <li><a href="prise2.php">УТРЕННИКИ</a></li>
                        <li><a href="prise3.php">КОРПОРАТИВЫ</a></li>
                    </ul>
				</li>
                
                <li><a href="zakaz.php"><font size='3'><b>Пригласить</b></font></a></li>
				<li><a href="interes.php"><font size='3'><b>Интересно</b></font></a></li>
                <div id="lavalamp"></div>
            </ul>
</div>
</div>


<body>
</html>