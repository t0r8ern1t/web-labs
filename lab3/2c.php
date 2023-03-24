<?php

if (!empty($_POST)) {
    $_SESSION['ar'] = $_POST;
}
?>

<form action="" method="get">
    <input type="text" name="name" placeholder="имя">
    <input type="text" name="age" placeholder="возраст">
    <input type="text" name="salary" placeholder="зарплата">
    <input type="text" name="compliment" placeholder="комплимент кодеру :з">
    <input type="submit">
</form>