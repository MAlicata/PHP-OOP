<?php
/*la clase especifica al objeto */
    class Camion extends Coche{
 
        //metodo constructor: estado inicial del objeto.  
        function __construct() {
            $this->ruedas = 8;
            $this->color = "blanco";
            $this->motor = 2600;
        }

        function establece_color($color_camion, $nombre_camion) {
            $this->color = $color_camion;
            echo "El color de ". $nombre_camion. " es: ".$this->color. "<br>";
        }

        function arrancar() {
            parent::arrancar();
            echo "Camión arrancado";
        }
    }
?>