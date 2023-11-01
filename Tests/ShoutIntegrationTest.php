<?php 

include __DIR__ . '/../Modules/Tasks/Controllers/ShoutController.php';

class ShoutIntegrationTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp()
    {
        // Set the TESTING constant to true
        if (!defined('TESTING')) {
            define('TESTING', true);
        }
    }

    public function testShoutDatabaseInteraction() {
        $controller = new ShoutController();
        $shouts = $controller->listShouts();
        
        $this->assertTrue(is_array($shouts));
        $this->assertArrayHasKey('message', $shouts[0]);
        $this->assertArrayHasKey('time', $shouts[0]);
    }
}
