<title>Новогодние интересностию Наряжаем</title>
<meta name="description" content="НОВОГОДНЯЯ ГИРЛЯНДА. Украшаем елку и дом!" />
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
 font li{
text-align: justify;
}

.fancybox-buttons img {
width: 193px;
}
#foot{
top:100px;
}
</style>
<body>
<div id="body">

<h1>НОВОГОДНЯЯ ГИРЛЯНДА</h1>

<h2>Для изготовления понадобится:</h2>
<font>
	<ul>
		<li>картон</li>
		<li>разноцветные нитки для вязания</li>
		<li>пуговицы</li>
		<li>разноцветные тесемки</li>
		<li>веревка для основы</li>
		<li>бельевые прищепки</li>
		<li>клей</li>
		<li>ножницы</li>
	</ul>
</font>
<h2>Процесс изготовления:</h2>
	<font>
		<ol>
			<li>
				<p>Из картона вырежьте новогодние елочки и украсьте их с помощью тесемочек и пуговиц, 
				приклеивая украшения к картонной елочке.</p>
			</li>
			
			<li> <p> Из ниток сделайте помпончики. Можно использовать готовую пряжу, а можно распустить 
			надоевший свитер либо другое трикотажное изделие. Кудрявые помпончики получатся
			именно из ранее использованных ниток.</p> 
			
			<p>Количество помпончиков определяйте в зависимости от длины будущей гирлянды. </p> 

			<h3> Как делать помпончики</h3>
				<ol>
					<li>
						На плотном картоне нарисуйте циркулем круг. 
					</li>	
					<li>	
						Сделайте внутреннее отверстие.
					</li>
					<li>
						Вырежьте две заготовки и сложите «бублики» вместе. 
					</li>
					<li>
						Сложенные вместе картонные заготовки обмотайте нитками.
						Чем больше слоев, тем плотнее будет помпон. 
					</li>	
					<li>	
						Разрежьте нитки по внешнему краю и аккуратно раздвиньте диски, не снимая.
					</li>
					<li>
						Получившийся пучок следует связать крепкой нитью.
					</li>	
					<li>	
						Теперь кольца можно снять либо разрезать и удалить. 
					</li>	
					<li>	
						Аккуратно распушите – помпончик готов.
					</li>
					<li>
						У каждого из помпончиков оставьте маленькие хвостики, за которые их можно будет привязать к гирлянде.
					</li>
				</ol>
				<br>
			<li>
			На веревочку привяжите помпончик, после с помощью прищепки прикрепите наряженную картонную елочку, и так поочередности по всей длине веревки.
			</li>
		</ol>
	</font>
	<h2>Делаем гирлянду (в картинках)</h2>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_1.jpg"><img alt='Примерно так это должно выглядеть' src="interes/st2_1s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_2.jpg"><img src="interes/st2_2s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_3.jpg"><img src="interes/st2_3s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_4.jpg"><img src="interes/st2_4s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_5.jpg"><img src="interes/st2_5s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_6.jpg"><img src="interes/st2_6s.jpg" /></a>
	<a class="fancybox-buttons" data-fancybox-group="button"  href="interes/st2_7.jpg"><img src="interes/st2_7s.jpg" /></a>
	
</div>
	
<?php
include('niz.php');
?>
</body>