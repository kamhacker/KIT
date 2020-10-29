<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    protected $faker;

    public function load(ObjectManager $manager)
    {
        $this->faker = Factory::create();

        for($i = 1; $i <= 50; $i++) {
        $task = new Task();
        $task->setTitle($this->faker->shuffle('Rémi, Manu'));
        $task->setDescription($this->faker->text($maxNbChars = 200));
        $task->setDeadline($this->faker->dateTimeBetween($startDate = 'now', $endDate = '+100 years', $timezone = null));
        $task->setCreatedAt($this->faker->dateTimeAD($max = 'now', $timezone = null));
        $manager->persist($task);

        }
        $manager->flush();
    }
}

