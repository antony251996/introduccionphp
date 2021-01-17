<?php


class BaseElement{
    protected $title;
    protected $description;
    protected $visible;
    protected $months;


    public function __construct($title,$description,$visible,$months){
        $this -> title = $title;
        $this -> description = $description;
        $this -> visible = $visible;
        $this -> months = $months;
    }

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


    function getDuration(){
        $years = floor($this->months/12);
        $rest_months = $this->months % 12;
        if ($years > 0) {
          echo "$years year".($years > 1 ? 's ':' ');
        }
        if ($rest_months > 0) {
          echo "and $rest_months month".($rest_months > 1 ? 's':'');
        }
    }
}
?>