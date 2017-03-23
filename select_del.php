<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connect_BD.php'; // подключаем скрипт
     
if(isset($_POST['summa'])){
 
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $summa = mysqli_real_escape_string($link, $_POST['summa']);
     
    $query ="DELETE FROM test WHERE summa = '$summa'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    header('Location: testGraf.html');
}
 
if(isset($_GET['summa']))
{   
    $id = htmlentities($_GET['id']);
    echo "<h2>Удалить модель?</h2>
        <form method='POST'>
        <input type='hidden' name='summa' value='$summa' />
        <input type='submit' value='Удалить'>
        </form>";
}
?>
</body>
</html>

