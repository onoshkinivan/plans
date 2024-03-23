<?php
$host = "localhost"; //хост БД
$username = "root"; //имя пользователя БД
$password = ""; //пароль пользователя БД
$database = "plan"; //имя БД
//Устанавливаем соединение с БД
$connection = mysqli_connect($host, $username, $password, $database);

//Если соединение не удалось:
if (!$connection) {
//Выводим сообщение об ошибке и завершаем выполнение скрипта
    die ("Ошибка подключения: " . mysqli_connect_error());
} else {
    echo "Успешное подключение к БД";
}

if(
    isset($_POST['task']) && !empty($_POST['task']) &&
    isset($_POST['task_date']) && !empty($_POST['task_date']) &&
    isset($_POST['task_time']) && !empty($_POST['task_time']) &&
    isset($_POST['priority']) && !empty($_POST['priority']) &&

)