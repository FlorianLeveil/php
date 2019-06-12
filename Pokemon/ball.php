<?php
include  './usable.php';
include './pokemon.php';

abstract class Balls implements Usable
{
    public $name;
    public $level_ball;
    public $bool;

    public function __construct ($name, $level_ball)
    {
        $this->name = $name;
        $this->level_ball = $level_ball;
    }

    public function capture(Pokemon $target)
    {
        $capture = round((($max_life - $life) / $max_life) * (1 + ($level_ball - $lvl_pokemon) / 25),2);
        $rand = rand(0,100)/100;

        if ($capture >= $rand)
        {
            $bool = TRUE;
        } else {
            $bool = FALSE;
        }


        
    }

    public function use ($target)
    {
        self::capture($target);

        if ($bool == TRUE)
        {
            echo 'Vous avez capturé le Pokémon '. $target->name;
        } else {
            echo 'RATER !';
        }
    }
}

?>