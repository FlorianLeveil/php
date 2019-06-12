<?php
abstract class pokemon
{
    protected $name;
    protected $life;
    protected $level;
    protected $type;
    protected $strength;
    protected $domage;
    protected $max_life;

    public function __construct ($name, $max_life, $life, $level, $type, $strength)
    {
        $this->name = $name;
        $this->life = $life;
        $this->level = $level;
        $this->type = $type;
        $this->strength = $strength;
    }
    public function attaque ($strength)
    {
        $domage = $strength * (rand(900, 1100) / 1000);
        $this->$life = $this->$life - $domage;
    }

}
?>
