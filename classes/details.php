<?php

include_once __DIR__ . '/products.php';

class details extends Products {

    public $code;
    public $color;
    public $weight;

public function __construct($_nome, $_categoria, $_data_prod, $_prezzo, $code, $color, $weight) {
    parent::__construct($_nome, $_categoria, $_data_prod, $_prezzo);
    $this->code = $code;
    $this->color = $color;
    $this->weight = $weight;

    }

    //Methods
    public function stampaSpec() {
        return $this->code . ' ' . $this->color . ' ' . $this->weight;
    }
}

