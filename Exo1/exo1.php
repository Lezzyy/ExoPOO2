<?php
class Clio
{
    protected $nbrDoors;
    protected $color;
    // private static $_price=10000;

    const THREE_DOORS = 3;
    const FIVE_DOORS = 5;

    const NIGHT_BLUE = 23456;
    const BLACK = 12345;
    const WHITE = 34567;
    const GREY = 45678;
    const RED = 56789;
    const BLUE = 78900;
    const YELLOW = 89012;
    const VIOLET = 90123;

    public function __construct($nbrDoors, $color)
    {
        $this->setNbrDoors($nbrDoors);
        $this->setColor($color);
    }

// getters
    public function nbrDoors(){
      return $this->nbrDoors;
    }

    public function color(){
      return $this->color;
    }

// setters
    public function setNbrDoors($nbrDoors)
    {
        if (in_array($nbrDoors, [self::THREE_DOORS, self::FIVE_DOORS])) {
          echo $this->nbrDoors=$nbrDoors;
        }
    }
    public function setColor($color)
    {
        if (in_array($color, [self::NIGHT_BLUE, self::WHITE, self::BLACK, self::GREY, self::RED, self::BLUE, self::YELLOW, self::VIOLET])) {
          echo $this->color=$color;
        }
    }
    // public static function setPrice(){
    //   echo self::$price;
    // }
  }
// }

$car= new Clio(Clio::THREE_DOORS, Clio::NIGHT_BLUE);
