<?php 
$content = file_get_contents('https://calendar.google.com/calendar/u/0/htmlembed?src=d.mazurkin@liontech.ru&amp;ctz=Europe/Moscow%22');
$content = str_replace('<html>','<html lang="ru">', $content);
$content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />', $content);
//$content = str_replace('</head>', '<link rel="stylesheet" href="https://liontech.ru/googlecalendar.css" /></head>', $content);
echo $content;