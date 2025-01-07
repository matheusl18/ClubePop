<?php
require_once __DIR__ . '/controllers/UserController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$controller = new UserController();

switch ($action) {
    case 'form':
        include __DIR__ . '/views/form.php';
        break;
    case 'store':
        $controller->store();
        break;
    case 'confirm':
        $controller->confirm();
        break;
    case 'activate':
        $controller->activate();
        break;
    case 'beneficios':
        include __DIR__ . '/views/beneficios.html';
        break;
    case 'sobre':
        include __DIR__ . '/views/sobre.html';
        break;
    default:
        include __DIR__ . '/views/home.php';
        break;
}
?>
