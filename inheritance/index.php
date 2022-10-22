<?php 
        include('Coche.php');
        include('Camion.php');
    
        //instancias de clases
        $renault = new Coche();
    
        $ford = new Camion();
    
        echo "El Renault tiene ". $renault->ruedas. " ruedas <br>";
    
        echo "El ford tiene ". $ford->ruedas. " ruedas <br>";

        $ford->frenar();

        $ford->establece_color('rojo','camion');

        $ford->arrancar();

?>