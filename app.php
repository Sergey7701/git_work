<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');
$app->add(new \App\UserInput());
$app->add(new \App\PrintString());
$app->add(new \App\SayHello());
$app->run();
// This is dev-1 branch
// This is dev-2 branch
// This is dev-3 branch

