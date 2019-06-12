<?php
include './ball.php';

class Hyperball extends Balls
    {
        public function __construct ($name, $level_ball)
        {
            $name = 'Hyperball';
            $level_ball = 50;

            parent::__construct($name, $level_ball);
        }
    }
    ?>