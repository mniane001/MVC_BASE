<?php 

// ShoutControllerTest.php

include __DIR__ . '/../Modules/Tasks/Controllers/ShoutController.php';

class ShoutControllerTest extends \PHPUnit\Framework\TestCase
{
    public function testListShouts()
    {
        $controller = new ShoutController();
        
        // Capture the output since your method is including a view that echoes HTML
        ob_start();
        $controller->listShouts();
        $output = ob_get_clean();
        
        // For now, let's just check if the output contains a known string
        $this->assertContains('SHOUT IT! shoutbox', $output);
    }
}
