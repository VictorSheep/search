<?php
// __DIR__ constante PHP qui calcule le chemin absolu du dossier
require_once __DIR__.'/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();