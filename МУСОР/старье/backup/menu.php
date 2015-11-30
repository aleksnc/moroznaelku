<?php
include('bd.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<meta name="title" content="Дед Мороз придет к Вам в дом!">
<meta name="description" content="Опытные артисты, запоминающийся праздник, Приятные цены" />
<meta name="geo.region" content="RU-город Санкт-Петербург" />
<meta name="keywords" content=" дед мороз,дед мороз на дом, дед мороз и снегурочка, дед мороз на дом в СПБ, Дед мороз Санкт-петербург, Дед мороз СПБ, Дед мороз и снегурочка СПБ" />

<style>
body{
background:url('fancybox/bar-abg.png') repeat-y;
}
#label {
	background: url('fancybox/back_menu.png') no-repeat scroll right 5px transparent;
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

#metrik{
position: fixed;
top: 95%;
left: 93%;
}
#metrik2{
position: fixed;
top: 95%;
left: 85%;
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
	$( "ver" ).button();
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
<div style="position: absolute; top:500px;">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 1, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 14195074);
</script>
</div>

</div>
<div id="label">
<img id='call' src='fancybox/call.png'>
<div class="container">
            <ul id="nav">
                <li><a class="hsubs" href="index.php"><font size='3'><b>Главная</b></font></a>
                    <ul class="subs">
                        <li><a href="index.php">О НАС</a></li>
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
                        <li><a href="prise2.php">УЧЕБНЫЕ ЗАВЕДЕНИЯ</a></li>
                        <li><a href="prise3.php">КОРПОРАТИВЫ</a></li>
                    </ul>
				</li>
                <li><a href="otziv.php"><font size='3'><b>Отзывы</b></font></a></li>
                <li><a href="zakaz.php"><font size='3'><b>Пригласить</b></font></a></li>
                <div id="lavalamp"></div>
            </ul>
</div>
</div>

<div id='metrik'>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var _tmr = _tmr || [];
_tmr.push({id: "2484540",  type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
//]]></script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2484540;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->


<!-- Rating@Mail.ru logo -->
<a target="_blank" href="http://top.mail.ru/jump?from=2484540">
<img src="//top-fwz1.mail.ru/counter?id=2484540;t=318;l=1" 
border="0" height="15" width="88" alt="Рейтинг@Mail.ru"></a>
<!-- //Rating@Mail.ru logo -->
</div>
<div id='metrik2'>

<!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=23061607&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23061607/1_0_A9DCFFFF_89BCE2FF_1_pageviews"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" onclick="try{Ya.Metrika.informer({i:this,id:23061607,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23061607 = new Ya.Metrika({id:23061607,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23061607" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</div>
<body>
</html>