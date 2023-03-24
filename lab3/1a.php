<?php
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/';
$matches = array();
preg_match_all($regexp, $text,$matches);
$matches = $matches[0];
foreach ($matches as $match)
{
    echo $match . "\n";
}