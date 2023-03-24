<?php
if (!empty($_GET['surname']) and !empty($_GET['name']) and !empty($_GET['age']))
{
    $surname = $_GET['surname'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo 'твое имя: ', $surname, ' ', $name, '<br>твой возраст: ', $age;
}
?>

<form action="" method="get">
    <input type="text" name="surname" placeholder="фамилия">
    <input type="text" name="name" placeholder="имя">
    <input type="text" name="age" placeholder="возраст">
    <input type="submit">
</form>