<?php

require 'Car.php';
$theHomer = new Car('mustard', 2, 'gasoline');
$springfieldPolice = new Car('black', 5, 'fuel');

echo $theHomer->start();
echo '<br> Vitesse de la voiture : ' . $theHomer->getCurrentSpeed() . ' km/h' . '<br>';
