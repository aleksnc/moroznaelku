<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(isset($_POST['koment'])&&$_POST['koment']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
  $to = 'moroznaelku@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'НОВЫЙ ЗАКАЗ'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>  
						<p>Коментарий: '.$_POST['koment'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: ".$_POST['name']." <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
echo "1";
	}
	else{
		echo "0";	
	}

?>