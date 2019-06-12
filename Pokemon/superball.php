<?php
include './ball.php';

class Superball extends Balls
    {
        public function __construct ($name, $level_ball)
        {
            $name = 'Superball';
            $level_ball = 20;

            parent::__construct($name, $level_ball);
        }
    }
    ?>