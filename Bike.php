<?php
    class Bike{
        public $rodado;
        public $marca;
        public $material;

        function __construct() {
            $this->rodado = 29;
            $this->marca = '';
            $this->material = 'fibra';
        }

        function velocidadMaxima(){
            echo "Bicicleta en maxima velocidad";
        }
    }
?>