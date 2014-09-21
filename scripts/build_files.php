#!/bin/php
<?php

// Yes, it's PHP, and very quickly-written PHP at that. Get over it.

$beowulf_src_path = dirname(__DIR__) . DIRECTORY_SEPARATOR .  'src' . DIRECTORY_SEPARATOR . 'Beowulf_in_IPA.txt';
$beowulf = explode("\n", file_get_contents($beowulf_src_path));
if (!count($beowulf)) {
    die('Beowulf has been erased from history!! :o');
}

$formats_path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'formats' . DIRECTORY_SEPARATOR . '*.php';
$formats = glob($formats_path);
if (!count($formats)) {
    die('There are no format files in src/formats/.');
}

foreach ($formats as $format) {
    require_once($format);
    $className = str_replace('.php', '', basename($format));

    $builder = new $className();
    $builder->build($beowulf);
}
