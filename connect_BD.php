<?php

    function getDataFromBaseForDropmenu() {
        $host = 'localhost'; // адрес сервера
        $database = 'trade'; // имя базы данных
        $user = 'root'; // имя пользователя
        $password = ''; // пароль
        $password = '';

            $link = mysqli_connect($host, $user, $password, $database)

            or die("Ошибка " . mysqli_error($link));
                $query = "SELECT DISTINCT Name FROM trade.myportfel  ";
                mysqli_set_charset ($link , "utf8");
                $result = mysqli_query($link, $query) or die("Ошибка". mysqli_error($link));

               while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   $nameVal[] = $line ;
               }



                   echo json_encode ( $nameVal );



        mysqli_free_result($result);
        mysqli_close($link);
        // перенаправление на скрипт index.php
//        header('Location: index.php');
        }

?>