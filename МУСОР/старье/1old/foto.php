
<script type="text/javascript">
$(document).ready(function() {
		$("a.gallery, a.iframe").fancybox();
	});

</script>


<?php
	$qu ="SELECT fotki FROM ngfoto";
	$res = mysql_query($qu);
	$row = mysql_fetch_row($res);
	$im=$row[0]+1;
	for ($i=1;$i<$im;$i++){
		echo  '<a class="gallery" rel="group" title="это фото'.$i.'" href="image/'.$i.'.jpg"><img src="image/'.$i.'s.jpg" /></a>';
	}
?>
