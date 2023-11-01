<?php
// I assume this will contain functions related to CRUD operations for shouts.


class ShoutModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllShouts() {
        //Fetch shouts from the database
        $result = mysqli_query($this->db, "SELECT * FROM shouts");
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }

    // Add other shout related database operations here...
}
