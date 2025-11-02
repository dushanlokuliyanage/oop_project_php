<?php

require_once __DIR__ . "/../app/controllers/RegisterController.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new RegisterController();

$BASE_URL = "/OOP%20In%20PHP%20Project/public/";

echo $uri;

if ($uri === $BASE_URL) {
    $controller->registerForm();
} elseif ($uri === $BASE_URL . "/register") {
    $controller->registerUser();
} elseif ($uri === $BASE_URL) {
    require_once __DIR__ . "/../app/views/success.php";
} else {
    echo "404 Not Found";
}
