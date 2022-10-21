<?php
/*la clase especifica al objeto */
    class Coche{
        public $ruedas;
        public $color;
        public $motor;

        //metodo constructor: estado inicial del objeto.  
        function __construct() {
            $this->ruedas = 4;
            $this->color = "";
            $this->motor = 1600;
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
        function establece_color($color_coche, $nombre_coche) {
            $this->color = $color_coche;
            echo "El color de ". $nombre_coche. " es: ".$this->color. "<br>";
        }

    }
?>