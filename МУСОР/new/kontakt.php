<title>Как с нами связаться</title>
<meta name="description" content="Заказать Деда Мороза и Снегурочку к себе на праздник вы можете по указанным телефонам или емейлу, а также в разделе заказ"/>

<?php
include('menu.php');
?>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ajax.js"></script>
<style>
#tel {
display:block;
font-size: 25px;
border: 3px dashed;
border-color: #6D6D6F;
background-clip: border-box;
padding: 4 10;
width: 350;
background: rgba(255,255,255,0.45);
font-family: segoe ui;
}

#foot {
top: 815px;
}

#ded{
position:absolute;
left:450;
top:100;
width:400;
}
</style>



<div id="body">
	<font>
	<p>
	Для того, чтобы оставить заказ или задать вопрос вы можете воспользоваться нашим сервисом <a href='zakaz.php'>"онлайн заказа"</a>
	А также отправить писмо или позвонить.
	</p>
	</font>
	<p id='tel'>
	Наш телефон: +7(812)9099609
	</p>
	<p id='tel'>
	Наша почта: moroznaelku.ru
	</p>
	<a id='tel' href='zakaz.php'>
	Онлайн заказ
	</a>
	<img id='ded' src='images/kontakt.png'/>
</div>	

<?php
include('niz.php');
?>

