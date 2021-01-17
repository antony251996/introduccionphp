<?php


class Jobs{
    private $title;
    private $description;
    private $visible;
    private $months;

    public function getTitle(){
        return $this -> title;
    }

    public function getMonths(){
        return $this -> months;
    }

    public function getDescription(){
        return $this -> description;
    }

    public function getVisible(){
        return $this -> visible;
    }
    
    public function setTitle($title){
        $this -> title = $title;
    }


    public function setDescription($description){
        $this -> description = $description;
    }


    public function setVisible($visible){
        $this -> visible = $visible;
    }


    public function setMonth($months){
        $this -> months = $months;
    }
}


$job1 = new Jobs();
$job1 -> setTitle('PHP Developer');
$job1 ->setDescription('This is an awesome job!!');
$job1 ->setVisible(true);
$job1 ->setMonth(16);


$job2 = new Jobs();
$job2 -> setTitle('Python Developer');
$job2 ->setDescription('Python is the best language i have ever worked with');
$job2 ->setVisible(true);
$job2 ->setMonth(24);


$jobs = [
    $job1,$job2
];


function getDuration($months){
    $years = floor($months/12);
    $rest_months = $months % 12;
  
    if ($years > 0) {
      echo "$years year".($years > 1 ? 's ':' ');
    }
  
    if ($rest_months > 0) {
      echo "and $rest_months month".($rest_months > 1 ? 's':'');
    }
  }
  
  
  function print_job($job){
    if ($job->getVisible() == true) {
        echo '<li class="work-position">';
        echo '<h5>'.$job->getTitle().'</h5>';
        echo '<p>'.$job->getDescription().'</p>';
        echo '<p>'.getDuration($job->getMonths()).'</p>';
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