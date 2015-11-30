<?php
include('menu.php');
?>

<style>
#forma {
	position: absolute;
	
	left: 20px; 
	float: left;
	width: 880px;
	height: 550px;

}

#temp {
	position: absolute;
 
	float: left;
	width: 880px;
	height: 550px;

}

</style>


<script>
function inp(){
var fio=document.getElementById('fio').value;
var otz=document.getElementById('otz').value;
	var obj={"fio":fio,"otz":otz}; 
	document.getElementById('temp').innerHTML =  "<st><b>"+fio+"</b><br>"+otz+"</st><br>";
	$.get('for_php.php', {data:obj,}, function(data){$('#otv').empty().append(data);});

} 




</script>

<div id="mi">
<div id='forma'>

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
				echo "<st><b>".$fi."</b><br>".$otziv."</st><br>";
}				
?>

<div id='temp'> 
	
</div>
	 
		</div>
	</div>
</div>

<b>______________________________________________</b><br>

	<st><br><b>Как вас зовут:</b><br></st>
		<textarea required id="fio" cols="40" rows="1"></textarea><br>
	<st><b>Ваш отзыв:</b><br></st>	
		<textarea required id="otz" cols="40" rows="3"></textarea><br><br>
		<input type='submit' id="button" onclick="inp();return false;"></input>

</div>
		

</div>
</div>



