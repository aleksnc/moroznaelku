<title>Заказать Деда Мороза.</title>
<meta name="title" content="Заказать Деда Мороза.">

<?php
include('menu.php');
?>

<script>
function inp(){
var name=document.getElementById('name').value;
var tel=document.getElementById('tel').value;
var koment=document.getElementById('koment').value;
	var obj={"name":name,"tel":tel,"koment":koment}; 
	$.get('for_php.php', {data:obj,}, function(data){$('#otv').empty().append(data);});
}
</script>

<style>
#post{
position: relative;
height: 200px;
 width: 550px;
}
</style>

<div id="mi">
<div id='post'>
<font size="3" color="#003153"  face="Arial"><p style="text-indent: 25px;"align="justify">
Чтобы позвать Деда Мороза в гости вы можете отправить ему письмо по электронной почте <b>moroznaelku@mail.ru</b> или с нашего сайта!!!!
</p></font>
</div>
<div id='zak'>
	<st><b>Как вас зовут:</b><br></st>
	<textarea required id="name" cols="40" rows="1"></textarea><br>
	<st><b>Номер телефона:</b><br></st>
	<input required type='text' id="tel" cols="40" rows="1"></input><br>
	<st><b>Коментарий:</b><br></st>	
	<textarea required id="koment" cols="80" rows="10"></textarea><br>
	<font color="#ff0000">* Желательно указать: Дату, время, количество детей и их возраст.</font><br><br>
	<input type='submit' id="button" onclick="inp();return false;"></input>	
</div>
</div>	

	<img id='dm' src='fancybox/dm.png'  style="position: absolute; left: 800px; top: 220px;"  height='600px';>
	
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