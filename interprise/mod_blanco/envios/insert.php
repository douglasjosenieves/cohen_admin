<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 require_once '../config.php';
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 $clavemd5 = md5($clave);
 



$qry = "INSERT INTO ".TABLA."
( 
`nombre`,
`apellido`,
`sexo`,
`email`,
`tel`,
`fecha_emis`,

 
`clave`,
`foto`,
`color`,
`pais`,
`tipo`,
`cargo`,
`anulado`)
VALUES
( 
'$nombre',
'$apellido',
'$sexo',
'$email',
'$tel',
'$fecha',

 
'$clavemd5',
'$foto',
'$color',
'$pais',
'$tipo',
'$cargo',
'$anulado');
";
 

$resul = mysql_query($qry);








 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>