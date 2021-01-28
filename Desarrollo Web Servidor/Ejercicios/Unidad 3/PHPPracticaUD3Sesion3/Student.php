<?php
class Student {

public $name;
private $graduationYear;    

public function __construct($graduationYear) {    
    $this->graduationYear = $graduationYear;        
}    

public function getYearsSinceGraduation()
{              
    
    $datetime = new DateTime();
    return $datetime->format("Y") - $this->graduationYear;        
}
}
