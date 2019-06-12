<?php
include_once ' ./pokemon.php';
    
class Salameche extends Pokemon
{
    public function __construct ($level, $life = null)
    {
        $name = 'Salameche';
        $max_life = 100 + 5 * $level;
        $life = $life ?? $max_life;
        $type = 'feu';
        $strength = 10 + 4 * $level;

        parent::__construct($name, $max_life, $life, $level, $type, $strength);
    }

    public function level_up ()
    {
        $this->level += 1;
        $this->life += 5;
        $this->strength += 4;

        $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 5 pts de vie et 4 pts de force.\n";

        echo $level_up_text;
        return true;
    }

}

?>