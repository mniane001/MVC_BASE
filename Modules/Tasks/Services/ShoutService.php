<?php
include __DIR__ . '/../Models/ShoutModel.php';

class ShoutService {
    private $shoutModel;

    public function __construct($db) {
        $this->shoutModel = new ShoutModel($db);
    }

    public function getAllShouts() {
        return $this->shoutModel->getAllShouts();
    }

    // Here you can add other business logic related to Shouts
    // For example, processing, filtering, or enriching shout data before returning it.

    public function processShout($data) {
        // Validate data, process or enrich it if needed
        // ...

        // Then you can save it to the database or perform other operations
        $this->shoutModel->saveShout($data);
    }

    // Add any other shout related business logic methods here...
}
