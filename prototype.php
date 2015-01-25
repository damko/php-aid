<?php
require_once 'vendor/autoload.php';
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as Adapter;
use League\CommonMark\CommonMarkConverter;


$filesystem = new Filesystem(new Adapter('projects/repo'));
$converter = new CommonMarkConverter();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'templates/cache',
    'auto_reload' => true,
));

$twig->addExtension(new Twig_Extension_Escaper('html'));
$projects = array();

foreach ($filesystem->listContents() as $file) {
    if ($file['type'] == 'file' && $file['extension'] == 'md') {
        try {
            $projects[] = $converter->convertToHtml($filesystem->read($file['basename']));
        } catch (Exception $e) {
            continue;
        }
    }
};

echo $twig->render('prototype.tpl', array(
        'projects' => $projects,
        'style' => 'prototype.css'
    ));
