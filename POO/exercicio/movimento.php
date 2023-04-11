<?php
enum TipoMovimento {
    case Fisico;
    case Especial;
    case Reflect;
}

class Movimento {

    public $type = TipoMovimento::Fisico;
    public $power = 0;
    public $precisao = 0;


    function __construct($type, $power)
    {
        $this->type = $type;
        $this->power = $power;
    }
}
?>