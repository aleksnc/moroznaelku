<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <title>Загрузка файлов при помощи Drag & Drop API.</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <!-- Создаем поле в которое мы будим переносить наши файлы -->
        <div id="dropbox">
        	<!-- Напишем пояснительную записку в которой укажем что файлы необходимо кидать именно сюда -->
            <span class="message">Перенесите сюда изображения для загрузки</span>
        </div>
        <!-- Подключаем библиотеку jQuery -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <!-- Подключаем плагин FileDrop -->
        <script src="js/jquery.filedrop.js"></script>
        <!-- Так же подключим еще один js скриптик которые напишем далее -->
        <script src="js/script.js"></script>

    </body>
</html>