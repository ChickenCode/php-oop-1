<?php

class Movie {
    //data
    public $title;
    public $minutes;
    public $director;
    public $language;
    public $price;
    public $discount;


    //methods
    public function getDiscount($age) {
        $discount = 0;

        if (12 > $age or 65 < $age) {
            $discount = 5;
        }

        return $this->discount = $discount;
    } 



    //construct (simile al mounted)
    function __construct($title, $minutes, $director, $language, $price)
    {
        $this->title = $title;
        $this->minutes = $minutes;
        $this->director = $director;
        $this->language = $language;
        $this->price = $price;
    }
}

$shreck = new Movie("Shreck", 95, "Vichy Jenson", "eng", 15);
$mulan = new Movie("Mulan", 120, "Niki Cairo", "eng", 15);

$mulan -> getDiscount(10);

var_dump($shreck);
var_dump($mulan);




?>