<?php
include('fancybox/bd.php');
?>
<style>

#menu {
	position: absolute;
	top: 20px;
	left: 50px; 
	float: left;
	width: 200px;
	height: 400px;
	border: 1px solid black

}

#otziv {
	position: absolute;
	top: 20px;
	left: 300px; 
	float: left;
	width: 300px;
	height: 310px;
	border: 1px solid black
}

#zak {
	position: absolute;
	top: 20px;
	left: 650px; 
	float: left;
	width: 300px;
	height: 300px;
	border: 1px solid black
}
</style>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="fancybox/scroll.css" media="screen" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript" src="fancybox/ajaxupload.3.5.js"></script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar2').tinyscrollbar();	
		});

$(function(){
	var btnUpload=$('#upload');
	var status=$('#status');
	new AjaxUpload(btnUpload, {
		action: 'upload-file.php',
		name: 'uploadfile',
		onSubmit: function(file, ext){
			 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
				// extension is not allowed 
				status.text('Поддерживаемые форматы JPG, PNG или GIF');
				return false;
			}
			status.text('Загрузка...');
		},
		onComplete: function(file, response){
			//On completion clear the status
			status.text('');
			//Add uploaded file to list
			if(response==="success"){
			var num=document.getElementById('num').value;
			var a='0';
			var obj={"num":num,"a":a};
				$('<li></li>').appendTo('#files').text('Загружен' + file).addClass('success');
				$.get('otz2.php', {data:obj,}, function(data){$('#otv').empty().append(data);});
				alert (num);
			} else{
				$('<li></li>').appendTo('#files').text('Файл не загружен' + file).addClass('error');
			}
		}
	});
	
});		
	
</script>

<div id='menu'>
<input type='submit' value='ОТЗЫВЫ'></input> <b>[ ]</b> <br><br>
<input type='submit' value='ЗАКАЗЫ'></input> <b>[ ]</b><br><br>
<input type='submit' value='КОЛОНКИ'><br><br>
<div id="mainbody" >
		<!-- Upload Button, use any id you wish-->
		<div id="upload" ><span>Выбрать файл<span></div><span id="status" ></span>
		
		<ul id="files" ></ul>
</div>


<?php
	$q ="SELECT * FROM ngfoto";
		$rez = mysql_query($q);
		$array = mysql_fetch_array($rez);
				$f=$array['fotki'];
				$fi=$f+1;
         echo '<input type="button" id="num" value="'.$fi.'"></input>';				
?>


</div>

<div id='otziv'>
	<div id="scrollbar2">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
			 <div class="overview">
				<?php
					$sel="SELECT COUNT(id) FROM ngotziv";
						$my_qu = mysql_query($sel);
						$row = mysql_fetch_row($my_qu);
						$rov = $row[0]; 
					$q ="SELECT * FROM ngotziv";
						$rez = mysql_query($q);
							for ($i=0;$i<$row[0];$i++){
								$array = mysql_fetch_array($rez);
								$fi=$array['fio'];
								$otziv=$array['otz'];
								echo "<br><b>".$fi."</b><br>".$otziv."<br>";
				}				
				?>
				</div>
		</div>
	</div>

</div>



<div id='zak'>
<?php
	$sel="SELECT COUNT(id) FROM ngzak";
		$my_qu = mysql_query($sel);
		$row = mysql_fetch_row($my_qu);
		$rov = $row[0]; 
	$q ="SELECT * FROM ngzak";
		$rez = mysql_query($q);
			for ($i=0;$i<$row[0];$i++){
				$array = mysql_fetch_array($rez);
				$fi=$array['fio'];
				$tel=$array['tel'];
				$zak=$array['koment'];
				echo "<br><b>".$fi."</b><br>".$tel."<br>".$zak."<br>";
}				
?>
</div>