<?php
// Database connection class using Singleton pattern to ensure only one connection is maintained
class Database {
    // Static instance to hold the single instance of the database connection
    private static $instance = null;
    private $con;

    // Private constructor to prevent multiple instances
    private function __construct() {
        // // Connect to the database
        $this->con = mysqli_connect("localhost", "root", "", "shoutit");

        //testing
        // $dbName = defined('TESTING') && TESTING ? 'shoutit_test' : 'shoutit';
        // $this->con = mysqli_connect("localhost", "root", "", $dbName);

        // Check for connection errors and terminate if any
        if (mysqli_connect_errno()) {
            die("Failed to connect to MYSQL: " . mysqli_connect_error());
        }
    }

    // Public method to get the instance of the database connection
    public static function getInstance() {
        // If instance is not yet created, create it
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Method to get the connection object
    public function getConnection() {
        return $this->con;
    }
}
