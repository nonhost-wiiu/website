<?php
require_once 'vendor/autoload.php';

$templateDir = realpath(__DIR__ . '/templates');

if ($templateDir === false) {
    throw new RuntimeException('not found.');
}

$loader = new \Twig\Loader\FilesystemLoader($templateDir);
$twig = new \Twig\Environment($loader);

$templateVars = [
    'title' => 'nonhost',
    'stylesheet' => 'style.css',
    'start_color' => '#4CAF50',
    'end_color' => '#2196F3',
];

echo $twig->render('index.twig', $templateVars);
