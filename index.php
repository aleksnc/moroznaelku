
<title>ДЕД МОРОЗ И СНЕГУРОЧКА В СПБ! АКЦИЯ! ДО 1.12.15 ЦЕНЫ ПРОШЛОГО ГОДА!</title>
<meta name="description" content="Опытные артисты, запоминающийся праздник, Приятные цены и конечно же трезвый Дед Мороз без вредных привычек! " />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<body>
<?php
	include('menu.php');
?>

<div id='body'>
	<div id='onafot'>
	<div id='onas'>
	<a id='big_buton'  href='onas.php'>О Нас</a>
	
			<font><p>
				Несколько причин пригласить Наших Деда Мороза и Снегурочку:
				<ul id='spisok'>
					<li> Поздравляем детей и взрослых уже более пяти лет;</li>
					<li>  Красивые новые костюмы;</li>
					<li>  Интересные программы для всех возрастов;</li>
					<li>  Много веселых конкурсов и загадок;</li>
					<li>  Приятные цены и акции;</li>
					<li>  По настоящему любим дарить чудо и новогоднее настроение!</li>
				</ul>
			</p></font>
	
			<a id='more' href='onas.php'>Продолжение...</a>
	</div>
	<div id='foto'>
	<a id='big_buton'href='foto.php'>Фотоальбом</a>
	<?php
		$im=10;
		for ($i=1;$i<$im;$i++){
			echo  '<a class="gallery" rel="group"  href="foto.php"><img style="width:122px;" src="images/foto/'.$i.'s.jpg" /></a>';
		}	
	?>
	<a id='more' href='foto.php'>Больше фотографий здесь</a>
	</div>
	</div>
	<div id='knopi'>
	<a href='prog1.php'class='perv'>ДЕД МОРОЗ НА ДОМ</a>
	<a href='prog2.php' class='centr'>ДЕД МОРОЗ НА УТРЕННИК</a>
	<a href='prog3.php'>ДЕД МОРОЗ НА КОРПОРАТИВ</a>
	</div>
	<div id='krugi'>
		<a href='prog1.php' id='krug' class='k1'>
		<img id='dom' onmouseover="size(event)" src="images/dom.png" />
		</a>
		<a href='prog2.php' id='krug'class='srednij'>
		<img id='ded' onmouseover="size(event)" src="images/ded.png" />
		</a>
		<a href='prog3.php' id='krug' class='k3'>
		<img id='korp' onmouseover="size(event)"  src="images/korp.png" />
		</a>
	</div>
	<div id='text' >
		<font><p>  Для кого-то Новый год это семейный ужин, для кого-то это встреча со старыми 
			друзьями, а кто-то хочет увидеть как от встречи с дедом морозом у детей загораются 
			глаза и дом наполняется их звонким счастливым смехом! И сколько бы нам небыло лет,
			и где, и скем бы мы не праздновали,нас всех объединяет одно волшебное чувство - 
			ожидание новогоднего чуда. Оно загорается искоркой в наших сердцах с детства,кода
			мы первый раз читаем стихотворение Дедушке морозу у горящей множеством огоньков 
			новогодней ёлки и больше никогда не гаснет. 
		</p>
		<p>	А ведь это так легко, оформите заказ
			Деда Мороза и Снегурочки и эти добрые персонажи придут к вам прямо из сказки.
			Просто позвоните +7(812)909-96-09 и расскажите, где вы хотите видеть доброго
			Дедушку Мороза? Кого он должен поздравить, кому вручить подарки? Дед Мороз на 
			дом, Дед Мороз во двор, Дед Мороз в офис, Дед Мороз на вечеринку – для нас нет
			ничего невозможного! Заказ Деда Мороза гарантирует великолепное настроение и 
			взрослым и детям. Наши талантливые актеры проведут конкурсы и викторины, 
			закружат вас в танце, споют с вами новогодние песни, они зарядят вас 
			позитивом на весь следующий год. Подарите себе праздник, которого вы
			так долго ждали! Сделайте заказ Деда Мороза и забудьте обо всех проблемах, 
			ведь Новый год 2014 уже совсем-совсем близко!
		</p>
		<p>	Мы работаем во всех районах города!!!</p></font>
		
	</div>	
	
	<div class='vidget'>
			<div id='tim'>
			<?php
			include('timer/time.html');
			?>
			</div>
		<div id='vk'>
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>
			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 1, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 14195074);
			</script>
			</div>		
	</div>
</div>
		<?php
		include('niz.php');
		?>
</body>