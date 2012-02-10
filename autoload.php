<?php
require_once('ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Testns'          => __DIR__,
));

$loader->registerPrefixes(array(
    'Testpr_' => __DIR__,
));

$loader->register();
use Testns\Auto;
$testns = new Auto();
$testpr = new Testpr_Auto();
