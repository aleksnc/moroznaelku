 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
 <link rel="stylesheet" href="css/style.css" />
<script>
var myid;
var idelem;
function size(e){
	e = e || event
	idelem=e.target;
	myid=idelem.id;
	idelem.src='images/'+myid+'.gif';
	idelem.onmouseout=outS;
 };
 function outS(){
		idelem.src='images/'+myid+'.png';
};
</script>
<div id='labela'>
</div>
<div id='head'>
<img id='nosok' src='images/nosok.png'/>
<img id='korob' src='images/korob.png'/>
	<div id='label'>
	<p>Дед Мороз и Снегурочка
	на Ваш Праздник</p>
	</div>
	<div id='menu'>
		<ul id="nav">
			<li><a class="nach" href="index.php">Главная</a>
			</li>
			<li><a  href="in.php">Программы</a>
				<ul class="subs2">
					<li><a href="prog1.php">На дом</a></li>
					<li><a href="prog2.php">Утренники</a></li>
					<li><a href="prog3.php">Корпоративы</a></li>
				</ul>
			</li>
				<li><a  href="#">Цены</a>
				<ul class="subs3">
					<li><a href="prise1.php">На дом</a></li>
					<li><a href="prise2.php">Утренники</a></li>
					<li><a href="prise3.php">Корпоративы</a></li>
				</ul>
			</li>
			
			<li><a href="zakaz.php">Пригласить</a></li>
			<li><a href="interes.php">Интересно</a></li>
			<li><a class='konch' href="kontakt.php">Контакты</a></li>
			<div id="lavalamp"></div>
        </ul>
	</div>
</div>