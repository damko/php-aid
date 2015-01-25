<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'templates/cache',
    'auto_reload' => true,
    'debug' => true,
));

//$twig->addExtension(new Twig_Extension_Escaper('html'));

echo $twig->render('home.tpl', array(
        'style' => 'home.css'
    ));
