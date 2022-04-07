<?php
require_once __DIR__.'/controllers/RecipeController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new RecipeController();

if ('/' === $urlPath) {
    $controller->browse();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    $controller->show($_GET['id']);
} elseif ('/add' === $urlPath) {
    $controller->add();
} elseif ('/edit' === $urlPath && isset($_GET['id'])) {
    $controller->edit($_GET['id']);
}else {
    header('HTTP/1.1 404 Not Found');
}