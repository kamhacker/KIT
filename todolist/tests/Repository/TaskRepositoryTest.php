<?php

namespace App\Tests\Repository;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskRepositoryTest extends KernelTestCase {

    public function testCount() {

        self::bootKernel();
        $tasks = self::$container->get(TaskRepository::class)->count([]);
        $this->assertEquals(50, $tasks);

    }
}