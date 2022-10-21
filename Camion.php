<?php
/*la clase especifica al objeto */
    class Camion{
        public $ruedas;
        public $color;
        public $motor;

        //metodo constructor: estado inicial del objeto.  
        function __construct() {
            $this->ruedas = 8;
            $this->color = "blanco";
            $this->motor = 2600;
        }

        //metodos
        function arrancar() {
            echo "Estoy arrancando<br>";
        }
        function girar() {
            echo "Estoy girando<br>";
        }
        function frenar() {
            echo "Estoy frenando<br>";
        }
    }
?>