function send()
{
//Получаем параметры
var name = $('#name').val()
var tel = $('#tel').val()
var koment = $('#koment').val()
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "scripts/for_php.php",
                data: "name="+name+"&tel="+tel+"&koment="+koment,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#preview").empty();
//и выводим ответ php скрипта
                        $("#preview").append(html);
                }
        });

}