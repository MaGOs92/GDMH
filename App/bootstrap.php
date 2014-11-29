<?php

ini_set('date.timezone', 'Europe/Brussels');

//On ajoute l'autoloader
$loader = require_once __DIR__ . './../vendor/autoload.php';

//dans l'autoloader nous ajoutons notre répertoire applicatif 
$loader->add("App",dirname(__DIR__));

$app = new Silex\Application();

$app['debug'] = true;

//On indique où allez pour le chemin http://localhost/SilexSkeleton/public/
$app->mount("/", new App\Controller\IndexController());

// Enregistrement de Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    "twig.path" => dirname(__DIR__) . "/App/view",
    'twig.options' => array('cache' => dirname(__DIR__).'/App/cache', 'strict_variables' => true)
));

// Enregistrement du générateur d'URL
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Enregistrement de doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'dbhost' => 'localhost',
        'dbname' => 'GDMHdb',
        'user' => 'root',
        'password' => 'root',
    ),
));

// Enregistrement du session provider
$app->register(new Silex\Provider\SessionServiceProvider());

$app->run();