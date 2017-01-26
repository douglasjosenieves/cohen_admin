<?php
define('DB_USER', "douglas"); // db user
define('DB_PASSWORD', "programador"); // db password (mention your db password here)
define('DB_DATABASE', "erp"); // database name
define('DB_SERVER', "127.0.0.1"); // db server
 
define('MONEDA',"Bs");
define('IMPUESTO',12);
define('RIF','RIF');
define('IVA','IVA');
define('BASE_URL', 'http://localhost/cohen_admin/interprise/'); 
define('PAIS', '<option value="VE" selected>Venezuela</option>'); 



function round_up($number, $precision = 3)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($number * $fig) / $fig);
}

?>