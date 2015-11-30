<script>
$(function() {
// функция замены атрибута img на src
var changeAttr = function(){
$("#slider ul li img[img]").each(function(){
$(this).attr("src",$(this).attr("img")).removeAttr("img");
})
}
// подключаем slider плагин
// который каждые n секунд уменьшает значение margin-left у тега ul
$("#slider").slider({
// свойства плагина
});
// устанавливаем паузу 2 сек, после чего заменяем атрибуты img на src
setTimeout(function(){
changeAttr()},
2000);
})
</script>

<style>
#slider{
width:980px;
height:613px;
position:relative;
overflow: hidden;
}
#slider ul {
position: absolute;
}
#slider ul li {
float: left;
height: 613px;
list-style-image: none;
list-style-type: none;
width: 980px;
position: relative;
}
</style>


<?php
// ...
$output = "<ul>";
$i = 1;
$j = 3; // количество изображений для начальной загрузки
foreach ($images as $image) {
$attr = $i > $j ? 'img' : 'src';
$output .= "<li><img ".$attr."='".$image['filepath']."' alt='".$image['title']."' title='".$image['title']."'/></li>";
$i++;
}
$output .= "</ul>";
// ...
?>

<div id="slider">
<ul style="width: 6860px; margin-left: 0px;">
<li><img title="Image1" alt="Image1" src="/images/image1.jpg"></li>
<li><img title="Image2" alt="Image2" src="/images/image2.jpg"></li>
<li><img title="Image3" alt="Image3" src="/images/image3.jpg"></li>
<li><img title="Image4" alt="Image4" img="/images/image4.jpg"></li>
<li><img title="Image5" alt="Image5" img="/images/image5.jpg"></li>
<li><img title="Image6" alt="Image6" img="/images/image6.jpg"></li>
<li><img title="Image7" alt="Image7" img="/images/image7.jpg"></li>
</ul>
</div>