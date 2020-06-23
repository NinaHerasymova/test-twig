<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('views');
$twig = new Environment($loader);

$cards = array(
  array(
    'title' => 'Blandit turpis cursus in hac habitasse platea dictumst',
    'date' => '11.11.2011',
    'author' => 'Consectetur Purus',
    'image' => 'https://i.pinimg.com/originals/8d/70/aa/8d70aa58b9ce9fcf1deb6745b78fd588.jpg'
  ),
  array(
    'title' => 'Blandit turpis cursus in hac habitasse platea dictumst',
    'date' => '11.11.2011',
    'author' => 'Consectetur Purus',
    'image' => 'https://i.pinimg.com/originals/8d/70/aa/8d70aa58b9ce9fcf1deb6745b78fd588.jpg'
  )
);


echo $twig->render('template.twig');