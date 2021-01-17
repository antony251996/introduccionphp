<?php

namespace App\Models;

require_once 'BaseElement.php';

class Project extends BaseElement{

    function getDuration(){
        $duration = parent::getDuration();
        echo "Job Duration: $duration";
    }
}


?>