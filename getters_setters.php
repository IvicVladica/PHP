<?php

class Cars {

    public $wheel_count = 4;
    private $door_count = 4;
    protected $seat_count = 2;

    function get_values() {

        echo $this->door_count;
        
    }

    function set_values() {

        $this->door_count = 10;
        
    }

}  

$bmw = new Cars();


echo $bmw->get_values();   //echo $bmw->door_count ne bi radilo jer je varijabla private
$bmw->set_values();        // mora preko get metode
echo $bmw->get_values();

?>

