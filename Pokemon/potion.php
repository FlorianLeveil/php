<?php
include './heal.php';

class Potion extends Heal
    {
        public function __construct ($name, $heal)
        {
            $name = 'Potion';
            $heal = 20;

            parent::__construct($name, $heal);
        }
    }

?>