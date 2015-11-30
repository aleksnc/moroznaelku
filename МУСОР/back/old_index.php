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
<div id='niz'>
<div id='metrik'>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({id: "2594700", type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2594700;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Rating@Mail.ru logo -->
<a href="http://top.mail.ru/jump?from=2594700">
<img src="//top-fwz1.mail.ru/counter?id=2594700;t=318;l=1" 
style="border:0;" height="15" width="88" alt="Рейтинг@Mail.ru" /></a>
<!-- //Rating@Mail.ru logo -->
</div>
<div id='metrik'>

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


</div>