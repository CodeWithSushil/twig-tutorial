<?php
require_once './vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__.'/views');
$twig = new Environment($loader,[
  'cache'=>__DIR__.'/cache',
  'debug'=>true
  ]);

echo $twig->render('index.twig', ['title'=>'Twig Tutorial', 'name'=>'Sushil']);

