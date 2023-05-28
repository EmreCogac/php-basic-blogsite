<?php
/* database tanımlamalarını yaptığım yer*/
define('DB_SERVER', 'sql306.epizy.com');
define('DB_USERNAME', 'epiz_33659875');
define('DB_PASSWORD', 'DHHk1OopvTbgfs');
define('DB_NAME', 'epiz_33659875_blog');
 
/* mysqli ile bağladığım yer */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// bağlantıyı kontrol ettiğim yer
if($mysqli === false){
    die("ERROR: BAĞLANTI SAĞLANAMADI. " . $mysqli->connect_error);
}