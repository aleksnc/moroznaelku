<title>НАШИ ФОТО</title>
<meta name="title" content="НАШИ ФОТО">
<meta name="description" content="Фотографии с мероприятий" />

<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<?php
include('menu.php');
?>

<script type="text/javascript">
$(document).ready(function() {
		$("a.gallery, a.iframe").fancybox();
	});

</script>

<div id="mi">

	<div id="scrollbar1">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
			 <div class="overview">

<?php
	$qu ="SELECT fotki FROM ngfoto";
	$res = mysql_query($qu);
	$row = mysql_fetch_row($res);
	$im=19;
	for ($i=1;$i<$im;$i++){
		echo  '<a class="gallery" rel="group"  href="image/'.$i.'.jpg"><img src="image/'.$i.'s.jpg" /></a>';
	}
	
?>
		</div>
	</div>
</div>


</div>