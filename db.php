<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dailyshop_registerusers';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die('false' . mysqli_connect_error());
} else{
    "Пользователь успешно зарегистрирован";
};