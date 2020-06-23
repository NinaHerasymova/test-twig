<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('views');
$twig = new Environment($loader);

echo $twig->render('template.twig');