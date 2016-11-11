<?php

require_once __DIR__.'/../app.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri) {
    home_action();
} elseif ('/index.php/single' === $uri && isset($_GET['id'])) {
    show_chall($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}