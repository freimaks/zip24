<?php

require_once __DIR__ . '/../task_2.php';

class Task2Test extends \PHPUnit\Framework\TestCase
{
 
    private $task;
 
    protected function setUp() : void
    {
        $this->task = new Task2();
    }
 
    protected function tearDown() : void
    {
        $this->task = NULL;
    }
 
    public function testOne()
    {
        $arr = [ ['x' => 3, 'y' => 2], ['x' => 4, 'y' => 6], ['x' => 1, 'y' => 5] ];
        $result = $this->task->getYByX($arr, 3);

        $this->assertEquals(2, $result);
    }

    public function testTwo()
    {
        $arr = [ ['x' => 3, 'y' => 2], ['x' => 4, 'y' => 6], ['x' => 1, 'y' => 5] ];
        $result = $this->task->getYByX($arr, 4);

        $this->assertEquals(6, $result);
    }
}
