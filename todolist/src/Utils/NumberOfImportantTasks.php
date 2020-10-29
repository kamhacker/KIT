<?php

namespace App\Utils;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TimeAverageByTask extends AbstractController
{
    public function numberOfImportantTask(Array $array) {

    $counter = 0;

    foreach ($array as $repositoryValue) {
        
        if ($repositoryValue->getIsImportant() == true) {
            
            $counter ++;

            }

        }

    return $counter;

    }
}