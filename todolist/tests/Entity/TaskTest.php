<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {

    private Task $task;

    protected function setUp():void {
        
        parent::setUp();

        $this->task = new Task();

    }

    public function testGetTitle():void {

        $value = "Hello world !";

        $response = $this->task->setTitle($value);
        $getTitle = $this->task->getTitle();

        self::assertInstanceOf(Task::class, $response);
        self::assertEquals($value, $getTitle);

    }
}