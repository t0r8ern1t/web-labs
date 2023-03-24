<?php

function pow_3($matches)
{
    return pow($matches[0], 3);
}

$text = 'a1b2c3';
$regexep = '/[0-9]/';
echo preg_replace_callback($regexep, 'pow_3', $text);
