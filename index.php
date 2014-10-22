<?php

require __DIR__ .'/vendor/autoload.php';


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache => null,
]);


$article = [
    'name' => 'fhuyeizU',
        'content' => 'rdug drtd',
];

echo $twig->render('article.html.twig', [
    'article' => $article,

    ]);