<p>Задание 1</p>
<?php 
//error_reporting(E_ERROR|E_WARNING|E_NOTICE|E_PARSE);
//ini_set('display_errors', 1);
$name = 'Евгений';
$age = 28;

echo 'Меня зовут '.$name.'<br />';
echo ' Мне' .$age. 'лет'; 
unset ($name, $age); 

?>
<p>Задание 2</p>
<?php
define('CITY', 'Gomel1');
//проверка объявлена ли константа и существует ли она
if(defined('CITY')==true)
    echo CITY;
?>
<p>Задание 3</p>
<?php
$book=array('title'=>'Трансерфинг', 'author'=>'Вадим Зеланд', 'pages'=>'197');
echo 'Недавно я прочитал книгу '.$book['title'].', написаную автором '.$book['author'].', я осилил все '.$book['pages'].' страниц, мне она очень понравилась!';
?>
<p>Задание 4</p>
<?php
$books = array('$book1'=>array('Трансерфинг','Вадим Зеланд','197'),
        '$book2'=>array('Психология влияния','Роберт Чалдини','285'));
$sum = ($books['$book1'][2]) + ($books['$book2'][2]);
echo'Недавно я прочитал книги ' .$books['$book1'][0].' и ' .$books['$book2'][0].', написанные соответственно авторами '.$books['$book1'][1].' и ' .$books['$book2'][1].', я осилил в сумме '.$sum.' страницы, не ожидал от себя подобного.'
?>