<?php
global $conn;
require_once("db.php");
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];

if(empty($email) || empty($password) || empty($repeatpass)){
    echo 'Заполните все полня';
}else{
    if($password != $repeatpass){
        echo 'Пароли не совподают';
    }else{
        $sql = "INSERT INTO `users` (email,password) VALUES ('$email','$password')";
        if ( $conn -> query($sql)){
            echo "Успешная регистрация";
        }else{
            echo 'Ошибка:'. $conn->error;
        }
    }

}
