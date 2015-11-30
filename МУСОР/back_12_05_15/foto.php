<title>Фото с проведенных новогодних праздников наших Деда Мороза и Снегурочки</title>
<meta name="description" content="На представленных здесь фотографиях только наши Дед Морозы и Снегурочки, работающие дома и на утренниках, а также студийные фото, чтобы вы могли посмотреть наши костюмы.  " />

<?php
include('menu.php');
?>


<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
		$("a.gallery").fancybox();
	});

</script>
<style>
#foot{
top:1050;
}
</style>
<div id="body">
	<div id="mi">
		<?php
			/*$qu ="SELECT fotki FROM ngfoto";
			$res = mysql_query($qu);
			$row = mysql_fetch_row($res); */
			$im=20;
			for ($i=1;$i<$im;$i++){
				echo  '<a class="gallery" rel="group"  href="images/foto/'.$i.'.jpg"><img src="images/foto/'.$i.'s.jpg" /></a>';
			}	
		?>
	</div>
</div>
<?php
include('niz.php');
?>