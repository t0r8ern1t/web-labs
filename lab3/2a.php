<?php

if (!empty($_GET['text'])){
    $s = $_GET['text'];
    $symbols = strlen($s);
    $spaces = substr_count($s, ' ');
    $words = $spaces + 1;

    echo 'символов в строке: ', $symbols, ' , слов: ', $words;
}
?>


<form action="" method="get">
    <textarea name="text" placeholder="напишите что-нибудь"></textarea>
    <input type="submit">
</form>
