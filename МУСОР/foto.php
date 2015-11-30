<title>НАШИ ФОТО</title>
<meta name="title" content="НАШИ ФОТО">
<meta name="description" content="Фотографии с мероприятий" />

<?php
include('menu.php');
?>


<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>

<script type="text/javascript">
$(document).ready(function() {
		$("a.gallery, a.iframe").fancybox();
	});

</script>

<div id="body">
	<?php
		include('kalendar.php');
	?>
	<div id="mi">
		<?php
			/*$qu ="SELECT fotki FROM ngfoto";
			$res = mysql_query($qu);
			$row = mysql_fetch_row($res); */
			$im=19;
			for ($i=1;$i<$im;$i++){
				echo  '<a class="gallery" rel="group"  href="image/'.$i.'.jpg"><img src="image/'.$i.'s.jpg" /></a>';
			}	
		?>
	</div>
</div>
<?php
include('niz.php');
?>