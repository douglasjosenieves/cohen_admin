<?php 
require_once 'seniat.php';




$seniar = new Rif('v129523359');
 

echo $seniar->getInfo();
$contacto = json_decode($seniar->getInfo(), true);
print_r($contacto);




 ?>

 <h1><?php echo ( $contacto['seniat']['nombre']); ?></h1>