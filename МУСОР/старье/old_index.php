<link href="calendar/css/start/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="calendar/js/jquery-ui-1.10.3.custom.js"></script>

<script>

$("#result").load(
  "for_php.php",
  {
    param1: "param1",
    param2: 2
  },
  function(){alert("Получен ответ от сервера.")}
);
</script>

<div id='result'>
</div>