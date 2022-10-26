<?php 
        include('Coche.php');
        include('Camion.php');
    
        //instancias de clases
        $renault = new Coche();
    
        $ford = new Camion();

   
        echo "El renault tiene " . $renault->get_ruedas() . " ruedas";
 
        echo "El ford tiene " . $ford->get_ruedas() . " ruedas";

        echo "El renault tiene un de " .$renault->get_motor(). " cc<br>";

?>