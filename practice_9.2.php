<?php

/* Задача №2
 * Необходимо в строке полученной со стандартного ввода, найти повторяющиеся символы 
 * (одинаковые символы, стоящие рядом друг с другом) и заменить их на один такой символ.
 */
 
	echo "Введите текст." . PHP_EOL;
	$userString =  trim(fgets(STDIN)); // Получаем строку от пользователя убираем пробелы.
	
	$str = preg_replace("/(.)(\\1)+/", "\\1", $userString);
	echo "Результат: {$str}";