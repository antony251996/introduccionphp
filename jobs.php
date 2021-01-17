<?php



$jobs = [
    [
        'title' => 'PHP Developer',
        'description' => 'This is an awesome job!!',
        'visible' => true,
        'months' => 16
    ],
    [
        'title' =>'Python Developer',
        'description' => 'Python is the best language i have ever worked with',
        'visible' => true,
        'months' => 12
    ],
    [
        'title' =>'DevOps',
        'description' => 'DevOps is the current technology that i am learning',
        'visible' => true,
        'months' => 19
    ],
    [
        'title' =>'Node Developer',
        'description' => 'Node is the current technology that i am learning',
        'visible' => true,
        'months' => 24
    ],
    [
        'title' =>'Fronted',
        'description' => 'Fronted is the current technology that i am learning',
        'visible' => true,
        'months' => 45
    ],
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
    echo '<li class="work-position">';
    echo '<h5>'.$job['title'].'</h5>';
    echo '<p>'.$job['description'].'</p>';
    echo '<p>'.getDuration($job['months']).'</p>';
    //echo '<p>'.$total_months.'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
?>