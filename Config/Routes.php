<?php
// Include the necessary controller
// include '../Modules/Tasks/Controllers/ShoutController.php';
include __DIR__ . '/../Modules/Tasks/Controllers/ShoutController.php';


class Routes {
    public function execute() {
        $controller = new ShoutController();

        switch ($_SERVER['REQUEST_URI']) {
            case '/ShoutBox/list-shouts':
                $controller->displayShouts();
                break;
            case '/ShoutBox/process-form':
                $controller->processForm();
                break;
            default:
                echo "404 Not Found";
                break;
        }
    }
}