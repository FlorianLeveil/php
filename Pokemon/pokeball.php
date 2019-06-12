<?php
include './ball.php';

class Pokeball extends Balls
    {
        public function __construct ($name, $level_ball)
        {
            $name = 'Pokeball';
            $level_ball = 10;

            parent::__construct($name, $level_ball);
        }
    }
    ?>