<?php

require_once __DIR__ . '/../task_3.php';

class Task3Test extends \PHPUnit\Framework\TestCase
{
 
    private $task;
 
    protected function setUp() : void
    {
        $this->task = new Task3();
    }
 
    protected function tearDown() : void
    {
        $this->task = NULL;
    }
 
    public function testOne()
    {
        $result = $this->task->revInt(123456);

        $this->assertEquals(654321, $result);
    }

    public function testTwo()
    {
        $result = $this->task->revInt(-99912233);

        $this->assertEquals(-33221999, $result);
    }
}
