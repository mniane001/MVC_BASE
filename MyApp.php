<?php


include __DIR__ . '/Config/Routes.php';

class MyApp {
    public function __construct() {
        $this->initConfigurations();
        $this->initDatabaseConnection();
        $this->initRouter();
    }

    private function initConfigurations() {
        // Load configurations, set time zones, etc.
    }

    private function initDatabaseConnection() {
        // Initialize database connection
    }

    private function initRouter() {
        $router = new Routes();
        $router->execute();
    }
}
