<?php 
    include('Coche.php');
    include('Camion.php');
    include('Bike.php');

    //instancias de clases
    $renault = new Coche();

    $ford = new Camion();

    $bike = new Bike();


    echo "El Renault tiene ". $renault->ruedas. " ruedas <br>";

    echo "El ford tiene ". $ford->ruedas. " ruedas <br>";

    $bike->velocidadMaxima();

?>