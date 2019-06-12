<?php
include_once './pokemon.php';
    
class Bulbizare extends Pokemon
{
    public function __construct ($level, $life = null)
    {
        $name = 'Bulbizare';
        $max_life = 100 + 7 * $level;
        $life = $life ?? $max_life;
        $type = 'feu';
        $strength = 10 + 3 * $level;

        parent::__construct($name, $max_life, $life, $level, $type, $strength);
    }

    public function level_up ()
    {
        $this->level += 1;
        $this->life += 7;
        $this->strength += 3;

        $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 7 pts de vie et 3 pts de force.\n";

        echo $level_up_text;
        return true;
    }

}

?>