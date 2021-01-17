<?php


use App\Models\{Job,Project,Printable};


require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';
require 'lib1/Project.php';



$job1 = new Job('PHP Developer','This is an awesome job!!',true,16);
$job2 = new Job('Python Developer','Python is the best language i have ever worked with',true,24);
$job3 = new Job('C# Developer','C# is the best language i have ever worked with',true,48);


$project1 = new Project('Project 1','Description',true,12);

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects=[
    $project1
];

function printElement(Printable $job){
    if ($job->getVisible() == true) {
        echo '<li class="work-position">';
        echo '<h5>'.$job->getTitle().'</h5>';
        echo '<p>'.$job->getDescription().'</p>';
        echo '<p>'.$job->getDuration().'</p>';
        //echo '<p>'.$total_months.'</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    }
}
?>