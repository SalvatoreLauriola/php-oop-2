<?php

//CLasse PRODOTTI

class Products {
    public $nome;
    public $categoria;
    public $data_prod;
    public $prezzo;



    public function __construct($_nome, $_categoria, $_data_prod, $_prezzo) {
        $this->nome = $_nome;
        $this->categoria = $_categoria;
        $this->data_prod = $_data_prod;
        $this->prezzo = $_prezzo;
    }

    //Methods
    public function stampaProd() {
        return $this->nome . ' ' . $this->prezzo . '$';
    }
}



