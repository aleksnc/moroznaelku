<title>Фото с проведенных новогодних праздников наших Деда Мороза и Снегурочки</title>
<meta name="description" content="На представленных здесь фотографиях только наши Дед Морозы и Снегурочки, работающие дома и на утренниках, а также студийные фото, чтобы вы могли посмотреть наши костюмы.  " />

<?php
include('menu.php');
?>

<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox-buttons').fancybox({
		helpers : {
			title : {
				type : 'inside'
			},	
		},
		afterLoad : function() {
			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
		}
	});
});

</script>
<style>
#foot{
}
#fancybox-wrap{
	top:300px;	
}
</style>
<div id="body">
	<div id="mi">
	<a class="fancybox-buttons" data-fancybox-group="button" title='Дед Мороз и Снегурочка' href="images/foto/1.jpg"><img src="images/foto/1s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/2.jpg"><img src="images/foto/2s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/3.jpg"><img src="images/foto/3s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/4.jpg"><img src="images/foto/4s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/5.jpg"><img src="images/foto/5s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/6.jpg"><img src="images/foto/6s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/7.jpg"><img src="images/foto/7s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/8.jpg"><img src="images/foto/8s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/9.jpg"><img src="images/foto/9s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/10.jpg"><img src="images/foto/10s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/11.jpg"><img src="images/foto/11s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/12.jpg"><img src="images/foto/12s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/13.jpg"><img src="images/foto/13s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/14.jpg"><img src="images/foto/14s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/15.jpg"><img src="images/foto/15s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/16.jpg"><img src="images/foto/16s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/17.jpg"><img src="images/foto/17s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="images/foto/18.jpg"><img src="images/foto/18s.jpg" /></a>

	</div>
</div>
<?php
include('niz.php');
?>