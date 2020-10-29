<?php

namespace App\Tests\Utils;

use App\Utils\TimeAverageByTask;
use PHPUnit\Framework\TestCase;
use App\Entity\Task;

class TimeAverageByTaskTest extends TestCase {

    /** @test */
    public function CalculateTimeAverageByTaskTest() {

        $calculateTimeAverageByTask = new TimeAverageByTask();

        $task = new Task();
        $task1 = new Task();

        $task->setIsImportant(true);
        $task1->setIsImportant(true);

        $array = [$task, $task1];

        $result = $calculateTimeAverageByTask-> numberOfImportantTask($array);
            
        $this->assertEquals(2, $result);
    }
}