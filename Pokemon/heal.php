<?php
include  './usable.php';
include './pokemon.php';

abstract class Heal implements Usable
{
    public $name;
    public $heal;

    public function __construct ($name, $heal)
    {
        $this->name = $name;
        $this->heal = $heal;
    }

    public function healer (Pokemon $target)
    {
        $jsp = $heal + $target->life;

        if ($jsp >= $target->max_life)
        {
            $target->life = $target->max_life;
        } else {
            $target->life = $heal + $target->life;
        }
    }



        
}

?>