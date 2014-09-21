#!/bin/php
<?php

// Yes, it's PHP, and very quickly-written PHP at that. Get over it.

$xml = simplexml_load_file(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Beowulf.ssml');
if (!$xml) {
    die('Beowulf has been erased from history!! :o Or, more likely, the SSML file doesn\'t parse for some reason.');
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
    $builder->build($xml);
}
