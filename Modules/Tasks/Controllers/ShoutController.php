<?php
// Include the database connection class
include __DIR__ . '/../../../Database/Connection.php';
include __DIR__ . '/../Services/ShoutService.php';
include __DIR__ . '/../../Helpers/TimeHelper.php';





// Controller class for managing shouts
class ShoutController {
    private $shoutService;
    private $db;

    // Constructor initializes database connection
    public function __construct() {
        $db = Database::getInstance()->getConnection();
        $this->shoutService = new ShoutService($db);
    }

    // Method to list shouts and display them in the view
    public function listShouts() {
        // Fetch shouts from the Model
        $shouts = $this->shoutService->getAllShouts();
        //le lier à la bd avant le view
        $connection = $this->db;
        //call the helpers i need
        // Now, let's format the time for each shout using the TimeHelper
        foreach ($shouts as &$shout) {
            $shout['time'] = TimeHelper::to12HourFormat($shout['time']);
        }
        return $shouts;
    }

    public function displayShouts() {
        $shouts = $this->listShouts();
        // Include and display the view
        include __DIR__ . '/../Views/CreateShout.php';
    }
    

    // Method to process form submission
    public function processForm() {
        // Handle form submission, store in database, etc.
        // NOTE: Ensure to validate and sanitize input to prevent SQL injections
    }
}
