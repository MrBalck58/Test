<?php
    error_reporting( 1 );

// Соединяемся, выбираем базу данных
    $link = mysqli_connect("localhost", "root",'' )
        or die('Не удалось соединиться: ' . $link->error());
//echo 'Соединение успешно установлено';
    $link->select_db("trade") or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = 'SELECT id,name, summa, data FROM test WHERE name like "%Сбе%"';
// Устанавливаем правильую кодировку для русского языка
    mysqli_set_charset ($link , "utf8");
//printf();
$result = mysqli_query($link, $query) or die('Запрос не удался: ' . $link->error());

// Выводим результаты в html
//echo "<table>\n";

while ($line =  mysqli_fetch_array ($result, MYSQLI_ASSOC)) 

		$data[] = $line;
{
   //echo "\t<tr>\n";
    //foreach ($line as $col_value) 
    //{
    //    echo "\t\t<td>$col_value</td>\n";
    //}
    //echo "\t\t<td>".$line['id']."</td>\n";
    //echo "\t\t<td>".$line['name']."</td>\n";
	echo json_encode( $data );

    //echo "\t</tr>\n";
}

//echo "</table>\n";

// Освобождаем память от результата
mysqli_free_result($result);

// Закрываем соединение
mysqli_close($link);

?>